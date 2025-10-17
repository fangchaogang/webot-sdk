<?php
namespace Webot\Channel\EWeCom\Message\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class SendResponse
 * @package Webot\Channel\EWeCom\Message\Response
 * @method getIsSendSuccess()
 * @method getMsgServerId()
 * @method getMsgType()
 * @method getMsgUniqueIdentifier()
 * @method getSeq()
 * @method getTimestamp()
 */
class SendResponse extends Collection
{

    /**
     * 返回参数说明
     *
     *
     * getIsSendSuccess()
     * 发送成功标识
     *
     * getMsgServerId()
     * 消息MsgServerId
     *
     * getMsgType()
     * 消息类型
     *
     * getMsgUniqueIdentifier()
     * getSeq()
     * getTimestamp()
     */

    /**
     * 返回案例
     * {
     * "code": 0,
     * "msg": "成功",
     * "data": {
     * "isSendSuccess": 1,
     * "msgServerId": 1175880,
     * "msgType": 2,
     * "msgUniqueIdentifier": "X6z4BGd6/JA4BuROCwC+Hw==",
     * "seq": 8465880,
     * "timestamp": 1760582055
     * }
     * }
     */
}