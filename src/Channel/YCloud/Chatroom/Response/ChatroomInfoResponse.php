<?php
namespace Webot\Channel\YCloud\Chatroom\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class ChatroomInfoResponse
 * @package Webot\Channel\YCloud\Chatroom\Response
 * @method getRobotKey()
 * @method getRobotId()
 * @method getConversationId()
 * @method getName()
 * @method getCreatorId()
 * @method getCreatorName()
 * @method getMemberCount()
 * @method getOuterUserCount()
 * @method getStatus()
 * @method getIsOuterGroupConversation()
 * @method getCreateTime()
 * @method getGmtCreate()
 * @method getGmtModify()
 *
 */
class ChatroomInfoResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getRobotKey()
     * 机器人密钥
     *
     * getRobotId()
     * 机器人主键ID
     *
     * getConversationId()
     * 群唯一标识：群ID
     *
     * getName()
     * 群名称
     *
     * getCreatorId()
     * 群主
     *
     * getCreatorName()
     * 群主昵称
     *
     * getMemberCount()
     * 群内⼈数
     *
     * getOuterUserCount()
     * 群内微信⼈数(不包含企业成员)
     *
     * getStatus()
     * 1 正常 0 删除
     *
     * getIsOuterGroupConversation()
     * 是否外部群
     *
     * getCreateTime()
     * 群的创建时间
     *
     * getGmtCreate()
     * 数据的创建时间
     *
     * getGmtModify()
     * 数据的更新时间
     *
     */
}