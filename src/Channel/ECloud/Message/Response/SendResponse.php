<?php
namespace Webot\Channel\ECloud\Message\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class SendResponse
 * @package Webot\Channel\ECloud\Message\Response
 * @method getType()
 * @method getNewMsgId()
 * @method getCreateTime()
 * @method getWcId()
 */
class SendResponse extends Collection
{
    /**
     * 返回参数说明
     *
     *
     * getType()
     * 类型:0APP/小程序 1文本 6文件 null图片/语音/视频/链接/Emoji 42名片
     *
     * getNewMsgId()
     * 消息newMsgId
     *
     * getCreateTime()
     * 消息发送时间戳
     *
     * getWcId()
     * 消息接收方id
     *
     */

    /**
     * 返回案例
     * {
    "type": 1,
    "msgId": 2562652205,
    "newMsgId": 4482117376572170921,
    "createTime": 1641457769,
    "wcId": "azhichao"
    }
     */
}