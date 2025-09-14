<?php
namespace Webot\Channel\YCloud\Login\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;
/**
 * 登陆检查
 * Class loginWechatCheckRequest
 * @package Webot\Channel\YCloud\Login\Request
 * @method $this setBizType(int $bizType)
 */
class LoginWechatCheckRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     *
     * setBizType(int $bizType)
     * 必填：4表示微信机器⼈，5表示企微机器⼈
     *
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
        return $app->login->loginWechatCheck($this);
    }

}