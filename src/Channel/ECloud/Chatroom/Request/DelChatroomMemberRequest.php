<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;

/**
 * 删除群成员
 * Class DelChatroomMemberRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 */
class DelChatroomMemberRequest extends AddChatroomMemberRequest
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
        return $app->chatroom->delChatroomMember($this);
    }
}