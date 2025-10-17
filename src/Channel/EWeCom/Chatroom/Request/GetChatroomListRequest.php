<?php
namespace Webot\Channel\EWeCom\Chatroom\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Request;
/**
 * 群详情-批量
 * Class GetChatroomListRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setRoomIdList(array $roomIdList)
 * @method $this setRelation(int $relation)
 * @method getRelation()
 */
class GetChatroomListRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setRoomIdList(array $roomIdList)
     * 必填：房间ID：$roomIdList = ["10723559966834914"]
     *
     * setRelation(int $relation)
     * 非必填：本身E云接口群成员昵称是获取不到的，需要关联联系人 1关联 0不关联
     *
     *
     */

    /**
     * @param Application $app
     * @return \Webot\Kernel\Support\Collection
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->chatroom->getChatroomList($this);
    }
}