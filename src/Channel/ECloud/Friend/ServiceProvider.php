<?php
namespace Webot\Channel\ECloud\Friend;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['friend'] = function ($app) {
            return new Client($app);
        };
    }
}