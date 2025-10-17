<?php
namespace Webot;

use Webot\Kernel\ServiceContainer;
use Webot\Kernel\Support\Str;

/**
 * Class Factory.
 *
 * @method static \Webot\Channel\ECloud\Application ECloud(array $config = []) >> E云管家渠道
 * @method static \Webot\Channel\EWeCom\Application EWeCom(array $config = []) >> E云企微渠道
 * @method static \Webot\Channel\YCloud\Application YCloud(array $config = []) >> 有机云渠道
 *
 */
class Factory
{
    /**
     * @param $name
     * @param array $config
     * @return ServiceContainer
     */
    public static function make($name, array $config = []): ServiceContainer
    {
        $namespace = Str::studly($name);
        $application = "\\Webot\\Channel\\{$namespace}\\Application";

        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments = [])
    {
        return self::make($name, ...$arguments);
    }
}
