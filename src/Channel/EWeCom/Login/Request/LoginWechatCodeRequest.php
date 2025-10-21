<?php
namespace Webot\Channel\EWeCom\Login\Request;
use Webot\Channel\EWeCom\Application;
/**
 * 提交验证码
 * Class CreateClientRequest
 * @package Webot\Channel\EWeCom\Login\Request
 * @method $this setCode(string $code)
 */
class LoginWechatCodeRequest extends RestoreClientRequest
{
    /**
     * 参数说明：
     *
     *
     * setCode(string $vcode)
     * 必填：验证码
     *
     */

    /**
     * @param Application $app
     * @return array|mixed
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->login->loginWechatCode($this);
    }
}