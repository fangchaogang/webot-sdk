<?php
namespace Webot\Channel\EWeCom\Chatroom\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class ChatroomInfoResponse
 * @package Webot\Channel\EWeCom\Login\Response
 * @method getMemberList()
 * @method getRoomCreateUserId()
 * @method getRoomId()
 * @method getRoomName()
 */
class ChatroomInfoResponse extends Collection
{

    /**
     * 返回参数说明：
     *
     *
     * getMemberList()
     * 群成员列表
     *
     * getRoomCreateUserId()
     * 群创建者ID
     *
     * getRoomId()
     * 群ID
     *
     * getRoomName()
     * 群名称
     *
     */

    /**
     * 返回案例：
     *{{
     * "code": 0,
     * "msg": "成功",
     * "data": {
     * "roomList": [
     * {
     * "memberList": [
     * {
     * "inviterId": "7881300895933215",
     * "isAdmin": 0,
     * "isCreator": 0,
     * "joinTime": 1760606256,
     * "joinScene": 1,
     * "name": "",
     * "userId": "1688854418340445",
     * "roomRemarkName": ""
     * },
     * {
     * "inviterId": "7881300895933215",
     * "isAdmin": 0,
     * "isCreator": 1,
     * "joinTime": 1760606256,
     * "joinScene": 1,
     * "name": "",
     * "userId": "7881300895933215",
     * "roomRemarkName": ""
     * }
     * ],
     * "roomCreateTime": "1760606256",
     * "roomCreateUserId": "7881300895933215",
     * "roomExtType": 1,
     * "roomId": "10914782893824742",
     * "roomName": "E云企微",
     * "roomAnnouncement": "",
     * "roomIsForbidChangeName": 0,
     * "roomEnableInviteConfirm": 0
     * }
     * ]
     * }
     * }
     */
}