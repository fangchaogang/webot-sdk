<?php
namespace Webot\Kernel;

use Webot\Kernel\Providers\ConfigServiceProvider;
use Webot\Kernel\Providers\EventDispatcherServiceProvider;
use Webot\Kernel\Providers\HttpClientServiceProvider;
use Webot\Kernel\Providers\LogServiceProvider;
use Pimple\Container;

/**
 * @property \Webot\Kernel\Config                               $config
 * @property \GuzzleHttp\Client                                 $http_client
 * @property \Monolog\Logger                                    $logger
 * @property \Symfony\Component\EventDispatcher\EventDispatcher $events
 */
class ServiceContainer extends Container
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var array
     */
    protected $defaultConfig = [];

    /**
     * @var array
     */
    protected $userConfig = [];

    /**
     * Constructor.
     */
    public function __construct(array $config = [], array $prepends = [], string $id = null)
    {
        $this->userConfig = $config;
        parent::__construct($prepends);
        $this->id = $id;

        $this->registerProviders($this->getProviders());
        $this->events->dispatch(new Events\ApplicationInitialized($this));
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id ?? $this->id = md5(json_encode($this->userConfig));
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return array_replace_recursive($this->defaultConfig, $this->userConfig);
    }

    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return array_merge([
            ConfigServiceProvider::class,
            LogServiceProvider::class,
            HttpClientServiceProvider::class,
            EventDispatcherServiceProvider::class,
        ], $this->providers);
    }

    /**
     * @param string $id
     * @param mixed  $value
     */
    public function rebind($id, $value)
    {
        $this->offsetUnset($id);
        $this->offsetSet($id, $value);
    }

    /**
     * Magic get access.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * Magic set access.
     *
     * @param string $id
     * @param mixed  $value
     */
    public function __set($id, $value)
    {
        $this->offsetSet($id, $value);
    }

    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}
