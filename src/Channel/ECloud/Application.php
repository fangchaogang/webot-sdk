<?php
namespace Webot\Channel\ECloud;

use Webot\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author fangchaogang <https://github.com/fangchaogang>
 * @todo <https://wkteam.cn/>
 *
 * @property \Webot\Channel\ECloud\Account\Client  $account  账户管理
 * @property \Webot\Channel\ECloud\Login\Client    $login    登陆管理
 * @property \Webot\Channel\ECloud\Message\Client  $message  消息管理
 * @property \Webot\Channel\ECloud\Chatroom\Client $chatroom 微信群管理
 * @property \Webot\Channel\ECloud\Friend\Client   $friend   好友管理
 * @property \Webot\Channel\ECloud\Util\Client     $util     特殊权限
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
        Friend\ServiceProvider::class,
        Util\ServiceProvider::class
    ];
}
