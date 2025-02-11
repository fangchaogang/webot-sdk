<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 添加群成员
 * 群如果开启了群聊邀请确认，本接口将失效，则直接使用邀人入群验证接口，
 * 群人数在40以下且未开启群聊邀请确认，可直接调用本接口添加群成员，40人以上请调用邀请群成员接口
 * Class AddChatroomMemberRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setChatRoomId(string $chatRoomId)
 * @method $this setUserList(string $userList)
 *
 */
class AddChatroomMemberRequest extends Request
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
     * setUserList(string $userList)
     * 必填：群成员微信id，多个已 "," 分割
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
        return $app->chatroom->addChatroomMember($this);
    }
}