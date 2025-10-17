<?php
namespace Webot\Channel\EWeCom\Chatroom\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class ChatroomMemberInfoResponse
 * @package Webot\Channel\EWeCom\Login\Response
 * @method getInviterId()
 * @method getIsAdmin()
 * @method getIsCreator()
 * @method getJoinTime()
 * @method getJoinScene()
 * @method getName()
 * @method getUserId()
 */
class ChatroomMemberInfoResponse extends Collection
{

    /**
     * 返回参数说明：
     *
     *
     * getInviterId()
     * 邀请者ID
     *
     * getIsAdmin()
     *
     * getIsCreator()
     * 创建者ID
     *
     * getJoinTime()
     * 加入时间
     *
     * getJoinScene()
     * 加入场景
     *
     * getName()
     * 群成员昵称：由于E云接口问题获取不到；需要从获取联系人中获取
     *
     * getUserId()
     * 群成员ID
     *
     */
}