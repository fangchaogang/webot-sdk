<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;

/**
 * 邀请群成员（40人以上）
 * 群如果开启了群聊邀请确认，本接口将失效，则直接使用邀人入群验证接口
 * 群人数在40以上且未开启群聊邀请确认，需用本接口以发送卡片形式邀请群成员，40人以下请调用添加群成员接口
 * Class InviteChatroomMemberRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 */
class InviteChatroomMemberRequest extends AddChatroomMemberRequest
{
    /**
     * @param Application $app
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->chatroom->addChatroomMember($this, '/inviteChatRoomMember');
    }
}