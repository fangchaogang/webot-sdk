<?php
namespace Webot\Channel\EWeCom\Account\Request;

use Webot\Channel\EWeCom\Application;

class WechatStatusRequest extends LogoutWechatRequest
{

    /**
     * @param Application $app
     * @return array|mixed|\Webot\Channel\EWeCom\Account\Response\WechatStatusResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->account->wechatStatus($this);
    }
}