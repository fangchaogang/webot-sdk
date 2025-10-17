<?php
namespace Webot\Channel\EWeCom;

use Webot\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author fangchaogang <https://github.com/fangchaogang>
 * @todo <https://aow566dz3e.apifox.cn/doc-7331301>
 *
 * @property \Webot\Channel\EWeCom\Account\Client  $account  账户管理
 * @property \Webot\Channel\EWeCom\Login\Client    $login    登陆管理
 * @property \Webot\Channel\EWeCom\Message\Client  $message  消息管理
 * @property \Webot\Channel\EWeCom\Chatroom\Client $chatroom 微信群管理
 * @property \Webot\Channel\EWeCom\Friend\Client   $friend   好友管理
 * @property \Webot\Channel\EWeCom\Util\Client     $util     特殊权限
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
        Util\ServiceProvider::class
    ];
}
