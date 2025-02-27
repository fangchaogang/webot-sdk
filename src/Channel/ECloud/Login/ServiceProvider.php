<?php
namespace Webot\Channel\ECloud\Login;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['login'] = function ($app) {
            return new Client($app);
        };
    }
}
