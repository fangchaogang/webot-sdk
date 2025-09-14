<?php
namespace Webot\Channel\YCloud\Login\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;
/**
 * 提交验证码
 * Class loginWechatCodeRequest
 * @package Webot\Channel\YCloud\Login\Request
 * @method $this setVcode(string $vcode)
 * @method $this setRobotKey(string $robotKey)
 */
class loginWechatCodeRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     *
     * setVcode(string $vcode)
     * 必填：验证码
     *
     * setRobotKey(string $robotKey)
     * 必填：机器⼈密钥
     *
     *
     */

    public function request(Application $app)
    {
        return $app->login->loginWechatCode($this);
    }
}