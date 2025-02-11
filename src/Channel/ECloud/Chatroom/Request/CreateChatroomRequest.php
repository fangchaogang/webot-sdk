<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Chatroom\Response\CreateChatroomResponse;
use Webot\Channel\ECloud\Request;

/**
 * 创建微信群
 * 本接口为敏感接口，请查阅调用规范手册
 * Class CreateChatroomRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setUserList(string $userList)
 * @method $this setTopic(string $topic)
 */
class CreateChatroomRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setUserList(string $userList)
     * 必填：群成员微信id，多个已 "," 分割，（必须传输2个微信id以上才可创建群聊）
     *
     * setTopic(string $topic)
     * 非必填：群名
     *
     */

    /**
     * @param Application $app
     * @return CreateChatroomResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): CreateChatroomResponse
    {
        return $app->chatroom->createChatroom($this);
    }
}