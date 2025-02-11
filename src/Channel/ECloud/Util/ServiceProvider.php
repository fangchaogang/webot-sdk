<?php
namespace Webot\Channel\ECloud\Util;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['util'] = function ($app) {
            return new Client($app);
        };
    }
}