<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 退出群聊
 * Class QuitChatroomRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setChatRoomId(string $chatRoomId)
 */
class QuitChatroomRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setChatRoomId(string $chatRoomId)
     * 必填：群号
     *
     *
     */

    /**
     * @param Application $app
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->chatroom->quitChatroom($this);
    }

}