<?php
namespace Webot\Channel\YCloud\Chatroom\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class ChatroomMemberInfoResponse
 * @package Webot\Channel\YCloud\Chatroom\Response
 * @method getRobotKey()
 * @method getConversationId()
 * @method getConversationName()
 * @method getUserId()
 * @method getName()
 * @method getAvatorUrl()
 * @method getStatus()
 * @method getIsCreator()
 * @method getIsOuterUser()
 * @method getGmtCreate()
 * @method getGmtModify()
 *
 */
class ChatroomMemberInfoResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getRobotKey()
     * 机器人密钥
     *
     *
     * getConversationId()
     * 群唯一标识：群ID
     *
     * getConversationName()
     * 群名称
     *
     * getUserId()
     * 群成员userid， vid
     *
     * getName()
     * 群成员昵称
     *
     * getAvatorUrl()
     * 头像
     *
     * getStatus()
     * 1 正常 0 删除
     *
     * getIsCreator()
     * 是否群主 1 是， 0 否
     *
     * getIsOuterUser()
     * 是否外部⽤户
     *
     * getGmtCreate()
     * 数据的创建时间
     *
     * getGmtModify()
     * 数据的更新时间
     *
     */
}