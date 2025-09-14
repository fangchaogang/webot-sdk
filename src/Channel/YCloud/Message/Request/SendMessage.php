<?php
namespace Webot\Channel\YCloud\Message\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;
/**
 * 发送消息基础类
 * Class LoginAuthRequest
 * @package Webot\Channel\YCloud\Message\Request
 * @method $this setRobotKey(string $robotKey)
 * @method $this setFriends(array $friends)
 */
class SendMessage extends Request
{

    /**
     * 参数说明：
     *
     *
     * setRobotKey($robotKey)
     * 必填：机器人密钥
     *
     * setFriends(array $friends)
     * 非必填：发送对象，可以是客户的vid或者群id
     *
     */



    public function init()
    {
        $this->set('type', 'robot.msg.send');
        $this->set('messageId', md5(uniqid()));
    }

    /**
     * @param Application $app
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|\Webot\Kernel\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->message->sendMessage($this);
    }
}