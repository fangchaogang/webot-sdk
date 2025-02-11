<?php
namespace Webot\Channel\ECloud\Message\Request;

/**
 * 发送艾特群消息
 * Class SendAtTextRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setWId(string $wId)
 * @method $this setWcId(string $wcId)
 * @method $this setContent(string $content)
 * @method $this setAt(string $at)
 */
class SendAtTextRequest extends SendTextRequest
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setWcId(string $wcId)
     * 必填：接收人微信id/群id
     *
     * setContent(string $content)
     * 必填：文本内容消息（@的微信昵称需要自己拼接，必须拼接艾特符号，不然不生效）
     *
     * setAt(string $at)
     * 必填：艾特的微信id（多个以逗号分开）群主或者管理员如果是艾特全部的人，则直接填写'notify@all'
     *
     */

}