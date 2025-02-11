<?php
namespace Webot\Channel\ECloud\Chatroom\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class GetChatroomMemberResponse
 * @package Webot\Channel\ECloud\Chatroom\Response
 * @method getChatRoomId()
 * @method getUserName()
 * @method getNickName()
 * @method getBigHeadImgUrl()
 * @method getSmallHeadImgUrl()
 * @method getInviterUserName()
 * @method getIsManage()
 */
class GetChatroomMemberResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getChatRoomId()
     * 群号
     *
     * getUserName()
     * 群成员微信号 （假如需要手机上显示的微信号或更详细的信息，则需要再调用获取群成员详情接口获取）
     *
     * getNickName()
     * 群成员默认昵称
     *
     * getBigHeadImgUrl()
     * 大头像
     *
     * getSmallHeadImgUrl()
     * 群小头像
     *
     * getInviterUserName()
     * 邀请人微信号（仅有群主和管理可以看到）
     *
     * getIsManage()
     * 是否是群主 true是 false否
     *
     *
     */

    /**
     * 返回案例：
     * [
    {
    "chatRoomId": "43353608733@chatroom",
    "userName": "fcg_520",
    "nickName": "突破",
    "chatRoomOwner": null,
    "bigHeadImgUrl": "https://wx.qlogo.cn/mmhead/ver_1/gCptNzH8HRL3mdZhiazNnISYf9wjV7dfVky6NyibPRDWKojKtazT1QCeNyBeBOnRU7HOEU4n9SN3yfAHPRcjAuRccuZHic8upT7xnNcLWSe0CESv8ibSjIZzTZicicXV4HJOpRGZMZeyMxic9ibFiaeibkpA4QtQ/0",
    "smallHeadImgUrl": "https://wx.qlogo.cn/mmhead/ver_1/gCptNzH8HRL3mdZhiazNnISYf9wjV7dfVky6NyibPRDWKojKtazT1QCeNyBeBOnRU7HOEU4n9SN3yfAHPRcjAuRccuZHic8upT7xnNcLWSe0CESv8ibSjIZzTZicicXV4HJOpRGZMZeyMxic9ibFiaeibkpA4QtQ/132",
    "v1": null,
    "memberCount": 0,
    "displayName": null,
    "inviterUserName": "wxid_6el15pr76of321",
    "notify": null,
    "chatRoomMembers": null,
    "isManage": false
    },
    {
    "chatRoomId": "43353608733@chatroom",
    "userName": "wxid_6el15pr76of321",
    "nickName": "Jon",
    "chatRoomOwner": null,
    "bigHeadImgUrl": "https://wx.qlogo.cn/mmhead/ver_1/hZ44coU8OrHr2fZ3O6hVmql0hAiaSVm1ibv52dtkxbIXMFnHxLR4x6w2E8zxVUD0ibDAYZibny2XYw8a30p50HbOt6OUxwrnK6xpVP8NotDY35E/0",
    "smallHeadImgUrl": "https://wx.qlogo.cn/mmhead/ver_1/hZ44coU8OrHr2fZ3O6hVmql0hAiaSVm1ibv52dtkxbIXMFnHxLR4x6w2E8zxVUD0ibDAYZibny2XYw8a30p50HbOt6OUxwrnK6xpVP8NotDY35E/132",
    "v1": null,
    "memberCount": 0,
    "displayName": null,
    "inviterUserName": null,
    "notify": null,
    "chatRoomMembers": null,
    "isManage": true
    },
    {
    "chatRoomId": "43353608733@chatroom",
    "userName": "wxid_fvaib2fxgas422",
    "nickName": "一方天地",
    "chatRoomOwner": null,
    "bigHeadImgUrl": "https://wx.qlogo.cn/mmhead/ver_1/IJO4k314kg4jGjpOGV6xibKnDWAPbDZ5pr8JPg0sGVyY3tpWstSv8U2Sia5eoUFMgmX437punafA9lk47obZ7AwHCzcCN2OExIqmfjYHhibua4/0",
    "smallHeadImgUrl": "https://wx.qlogo.cn/mmhead/ver_1/IJO4k314kg4jGjpOGV6xibKnDWAPbDZ5pr8JPg0sGVyY3tpWstSv8U2Sia5eoUFMgmX437punafA9lk47obZ7AwHCzcCN2OExIqmfjYHhibua4/132",
    "v1": null,
    "memberCount": 0,
    "displayName": null,
    "inviterUserName": "wxid_6el15pr76of321",
    "notify": null,
    "chatRoomMembers": null,
    "isManage": false
    }
    ]
     */
}