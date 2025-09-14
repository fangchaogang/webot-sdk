<?php
namespace Webot\Channel\YCloud;

use Webot\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author fangchaogang <https://github.com/fangchaogang>
 * @todo 有机云PDF文档
 *
 * @property \Webot\Channel\YCloud\Account\Client  $account  账户管理
 * @property \Webot\Channel\YCloud\Login\Client    $login    登陆管理
 * @property \Webot\Channel\YCloud\Message\Client  $message  消息管理
 * @property \Webot\Channel\YCloud\Chatroom\Client $chatroom 微信群管理
 * @property \Webot\Channel\YCloud\Friend\Client   $friend   好友管理
 * @property \Webot\Channel\YCloud\Util\Client     $util     特殊权限
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Account\ServiceProvider::class,
        Login\ServiceProvider::class,
        Message\ServiceProvider::class,
        Chatroom\ServiceProvider::class,
//        Friend\ServiceProvider::class,
//        Util\ServiceProvider::class
    ];
}
