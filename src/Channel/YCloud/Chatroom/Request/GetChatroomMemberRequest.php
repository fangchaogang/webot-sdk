<?php

namespace Webot\Channel\YCloud\Chatroom\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;
/**
 * 获取群成员列表
 * Class GetChatroomMemberRequest
 * @package Webot\Channel\YCloud\Chatroom\Request
 * @method $this setRobotKey(string $robotKey)
 * @method $this setStatus(int $status)
 * @method $this setConversationId(string $conversationId)
 * @method $this setMemberUserId(int $memberUserId)
 * @method $this setMemberName(string $memberName)
 * @method $this setPageNum(int $pageNum)
 * @method $this setPageSize(int $pageSize)
 *
 */
class GetChatroomMemberRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setRobotKey(string $robotKey)
     * 必填：机器⼈robotKey
     *
     * setStatus(int $status)
     * 非必填：机器⼈是否在群内
     *
     * setConversationId(string $conversationId)
     * 非必填：群ID
     *
     * setMemberUserId(int $memberUserId)
     * 非必填：群成员唯⼀标志
     *
     * setMemberName(string $memberName)
     * 非必填：群成员名模糊匹配
     *
     * setPageNum(int $pageNum)
     * 非必填：分⻚⻚数 默认:1
     *
     * setPageSize(int $pageSize)
     * 非必填：每⻚数量 默认:20
     *
     */

    /**
     * @param Application $app
     * @return \Webot\Kernel\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->chatroom->GetChatroomMember($this);
    }
}