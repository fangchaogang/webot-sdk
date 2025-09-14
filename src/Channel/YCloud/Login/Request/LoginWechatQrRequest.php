<?php
namespace Webot\Channel\YCloud\Login\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;
/**
 * 获取二维码
 * Class LoginWechatQrRequest
 * @package Webot\Channel\YCloud\Login\Request
 * @method $this setBizType(int $bizType)
 * @method $this setLoginType(int $loginType)
 */
class LoginWechatQrRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     *
     * setBizType(int $bizType)
     * 必填：4表示微信机器⼈，5表示企微机器⼈
     *
     * setLoginType(int $loginType)
     * 个微：
     * 固定传1
     * 企微：
     * 具体参数使⽤2.3⾥deviceType⾥返回
     * 的value⼤于0的Key（代表有权限）
     */

    /**
     * 机器人密钥
     * @param string $robotKey
     * @return $this
     */
    public function setRobotKey(string $robotKey): self
    {
        $this->set('r', $robotKey);
        return $this;
    }

    public function request(Application $app)
    {
        return $app->login->loginWechatQr($this);
    }
}