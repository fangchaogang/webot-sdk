<?php
namespace Webot\Channel\EWeCom\Account\Request;

use Webot\Channel\EWeCom\Application;

class GetWechatProfileRequest extends LogoutWechatRequest
{
    /**
     * @param Application $app
     * @return array|mixed|\Webot\Channel\EWeCom\Account\Response\GetWechatProfileResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->account->getWechatProfile($this);
    }
}