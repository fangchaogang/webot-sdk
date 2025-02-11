<?php
namespace Webot\Channel\ECloud\Chatroom\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class GetChatroomInfoResponse
 * @package Webot\Channel\ECloud\Chatroom\Response
 * @method getChatRoomId()
 * @method getNickName()
 * @method getChatRoomOwner()
 * @method getBigHeadImgUrl()
 * @method getSmallHeadImgUrl()
 * @method getV1()
 * @method getMemberCount()
 * @method array getChatRoomMembers()
 */
class GetChatroomInfoResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getChatRoomId()
     * 群号
     *
     * getNickName()
     * 群名称
     *
     * getChatRoomOwner()
     * 群主微信ID
     *
     * getBigHeadImgUrl()
     * 大头像，一般为空
     *
     * getSmallHeadImgUrl()
     * 群小头像
     *
     * getV1()
     * 群v1
     *
     * getMemberCount()
     * 群成员数量
     *
     * getChatRoomMembers()
     * 群成员列表【userName成员微信ID nickName成员微信昵称 inviterUserName邀请者微信ID isManage是否群管理 true是】
     *
     */

    /**
     * 返回案例：
     *[
    {
    "chatRoomId": "43353608733@chatroom",
    "userName": "43353608733@chatroom",
    "nickName": "微仓预发1176/19800000002",
    "chatRoomOwner": "wxid_6el15pr76of321",
    "bigHeadImgUrl": null,
    "smallHeadImgUrl": "https://wx.qlogo.cn/mmcrhead/g9RQicMD01M11Y0LMuE9eaL1ZFvY8rk0P24ACyFd3Cib6dmqLfOAAN89qqr51ZhlKONQUic7KAjDCY/0",
    "v1": "v3_020b3826fd03010000000000e67e2ced9cd6d3000000501ea9a3dba12f95f6b60a0536a1adb68ece6a36c07ba5abddf6c3b587759038d0cbf16d158f9f9add3a842d6712825950dd7c9f20eac59611de96b3474e8b53c5231c27a1d30993b6e1049371@stranger",
    "memberCount": 3,
    "displayName": null,
    "inviterUserName": null,
    "notify": 1,
    "chatRoomMembers": [
    {
    "userName": "fcg_520",
    "nickName": "突破",
    "inviterUserName": "wxid_6el15pr76of321",
    "isManage": false
    },
    {
    "userName": "wxid_6el15pr76of321",
    "nickName": "Jon",
    "inviterUserName": null,
    "isManage": true
    },
    {
    "userName": "wxid_fvaib2fxgas422",
    "nickName": "一方天地",
    "inviterUserName": "wxid_6el15pr76of321",
    "isManage": false
    }
    ],
    "isManage": null
    }
    ]
     */
}