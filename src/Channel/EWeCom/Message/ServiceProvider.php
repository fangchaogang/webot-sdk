<?php
namespace Webot\Channel\EWeCom\Message;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['message'] = function ($app) {
            return new Client($app);
        };
    }
}
