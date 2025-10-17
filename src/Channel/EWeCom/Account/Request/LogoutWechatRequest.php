<?php
namespace Webot\Channel\EWeCom\Account\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Request;
/**
 * 注销
 * Class LogoutWechatRequest
 * @package Webot\Channel\EWeCom\Account\Request
 * @method $this setGuid(string $guid)
 */
class LogoutWechatRequest extends Request
{

    /**
     * @param Application $app
     * @return array|mixed
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->account->logoutWechat($this);
    }
}