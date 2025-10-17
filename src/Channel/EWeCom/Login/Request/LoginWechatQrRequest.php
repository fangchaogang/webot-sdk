<?php
namespace Webot\Channel\EWeCom\Login\Request;
use Webot\Channel\EWeCom\Application;

/**
 * 二维码-获取
 * Class LoginWechatQrRequest
 * @package Webot\Channel\EWeCom\Login\Request
 * @method $this setUseCache(bool $useCache = false)
 */
class LoginWechatQrRequest extends RestoreClientRequest
{

    /**
     * 参数说明：
     *
     *
     * setUseCache(bool $useCache = false)
     * 主动扫码模式，useCache=false，默认，强制获取新的登录二维码，并使用手机主动扫码
     * 被动确认模式，useCache=true，推送登录授权消息到（实例上最近一次登录过的）账号对应的手机端
     *
     *
     */

    /**
     * @param Application $app
     * @return array|mixed|\Webot\Channel\EWeCom\Login\Response\LoginWechatQrResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->login->loginWechatQr($this);
    }
}