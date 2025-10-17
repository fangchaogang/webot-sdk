<?php
namespace Webot\Channel\EWeCom\Account;

use Webot\Channel\EWeCom\Account\Request\GetWechatProfileRequest;
use Webot\Channel\EWeCom\Account\Request\LogoutWechatRequest;
use Webot\Channel\EWeCom\Account\Request\WechatStatusRequest;
use Webot\Channel\EWeCom\Account\Response\GetWechatProfileResponse;
use Webot\Channel\EWeCom\Account\Response\WechatStatusResponse;

class Client extends \Webot\Channel\EWeCom\Client
{
    /**
     * 注销
     * @param LogoutWechatRequest $request
     * @return array|mixed
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function logoutWechat(LogoutWechatRequest $request)
    {
        return $this->http('/user/logout', $request);
    }

    /**
     * 获取登陆微信信息
     * @param GetWechatProfileRequest $request
     * @return GetWechatProfileResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function getWechatProfile(GetWechatProfileRequest $request)
    {
        return new GetWechatProfileResponse($this->http('/user/getProfile', $request));
    }

    /**
     * 微信状态
     * @param WechatStatusRequest $request
     * @return WechatStatusResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function wechatStatus(WechatStatusRequest $request)
    {
        return new WechatStatusResponse($this->http('/login/checkLogin', $request));
    }
}