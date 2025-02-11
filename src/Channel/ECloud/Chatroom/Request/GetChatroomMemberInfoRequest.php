<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;
use Webot\Kernel\Support\Collection;
use Webot\Channel\ECloud\Request;

/**
 * 获取群成员详情
 * Class GetChatroomMemberInfoRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setChatRoomId(string $chatRoomId)
 * @method $this setUserList(string $userList)
 */
class GetChatroomMemberInfoRequest extends Request
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
     * 必填：群成员微信ID PS: 暂不支持多个群成员查询，可间隔调用获取
     *
     */

    /**
     * @param Application $app
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): Collection
    {
        return $app->chatroom->getChatroomMemberInfo($this);
    }
}