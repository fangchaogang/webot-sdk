<?php
namespace Webot\Channel\YCloud\Login\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;
/**
 * 创建机器人
 * Class CreateRobotRequest
 * @package Webot\Channel\YCloud\Login\Request
 *
 * @method $this setBizType(int $bizType)
 * @method $this setLoginType(int $loginType)
 */
class CreateRobotRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setRobotType(int $robotType = 1)
     * 必填：固定传1
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

    public function setRobotType(int $robotType = 1): CreateRobotRequest
    {
        $this->set('robotType', $robotType);
        return $this;
    }
    /**]
     * @param Application $app
     * @return \Webot\Channel\YCloud\Login\Response\CreateRobotResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->login->createRobot($this);
    }
}