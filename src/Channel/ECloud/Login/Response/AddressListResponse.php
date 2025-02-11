<?php
namespace Webot\Channel\ECloud\Login\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class AddressListResponse
 * @package Webot\Channel\ECloud\Login\Response
 * @method getFriends()
 * @method getChatrooms()
 * @method getGhs()
 * @method getOthers()
 */
class AddressListResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getFriends()
     * 好友列表,不包含企微好友， 获取企微好友到：获取企微联系人列表
     *
     * getChatrooms()
     * 群组列表，只会获取保存到通讯录的好友
     *
     * getGhs()
     * 公众号列表
     *
     * getOthers()
     * 微信其他相关
     */

    /**
     * 返回案例：
     * {
    "friends": [
    "wxid_y1owq5e76q8o22"
    ],
    "chatrooms": [
    "17492445415@chatroom"
    ],
    "ghs": [
    "gh_3dfda90e39d6"
    ],
    "others": [
    "weixin",
    "fmessage",
    "medianote",
    "floatbottle"
    ]
    }
     */
}