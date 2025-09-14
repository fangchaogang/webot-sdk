<?php
namespace Webot\Channel\YCloud\Chatroom\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;
/**
 * 获取群列表
 * Class GetChatroomListRequest
 * @package Webot\Channel\YCloud\Chatroom\Request
 * @method $this setRobotKey(string $robotKey)
 * @method $this setStatus(int $status)
 * @method $this setConversationId(string $conversationId)
 * @method $this setName(string $name)
 * @method $this setPageNum(int $pageNum)
 * @method $this setPageSize(int $pageSize)
 *
 */
class GetChatroomListRequest extends Request
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
     * setName(string $name)
     * 非必填：群名模糊匹配
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
        return $app->chatroom->GetChatroomList($this);
    }

}