<?php
namespace Webot\Channel\ECloud\Login\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Login\Response\LoginWechatResponse;
use Webot\Channel\ECloud\Request;

/**
 * 执行微信登录（第三步）
 * Class LoginWechatRequest
 * @package Webot\Channel\ECloud\Login\Request
 * @method $this setWId($wId)
 * @method $this setVerifyCode($verifyCode)
 * @method $this setAutoCheck($autoCheck)
 */
class LoginWechatRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId($wId)
     * 必填：登录实例标识（设备号）
     *
     * setVerifyCode($verifyCode)
     * 非必填：验证码 默认不传，若扫码结束后，本接口返回提示"请在ipad上输入验证码"，则再调用1次本接口且传验证码即可（PS：极少情况下会出现此情况,可忽略此字段）
     *
     * setAutoCheck($autoCheck)
     * 非必填：只针对mac协议，建议填false
     *
     */

    /**
     * @param Application $app
     * @return LoginWechatResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): LoginWechatResponse
    {
        return $app->login->loginWechat($this);
    }
}