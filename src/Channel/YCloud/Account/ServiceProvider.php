<?php
namespace Webot\Channel\YCloud\Account;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $pimple
     */
    public function register(Container $pimple)
    {
        $pimple['account'] = function ($app) {
            return new Client($app);
        };
    }
}