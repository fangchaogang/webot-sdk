<?php
namespace Webot\Channel\YCloud\Message\Request;

/**
 * 发送文本消息
 * Class SendTextRequest
 * @package Webot\Channel\YCloud\Message\Request
 * @method $this setContent(string $content)
 * @method $this setAtUserList(string $atUserList)
 */
class SendTextRequest extends SendMessage
{

    /**
     * 参数说明：
     *
     *
     * setContent(string $content)
     * 必填：发送text内容
     *
     * setAtUserList(string $atUserList)
     * 非必填：艾特对象，多个对象用英文逗号隔开
     *
     */
}