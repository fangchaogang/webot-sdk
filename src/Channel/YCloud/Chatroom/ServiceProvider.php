<?php
namespace Webot\Channel\YCloud\Chatroom;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['chatroom'] = function ($app) {
            return new Client($app);
        };
    }
}