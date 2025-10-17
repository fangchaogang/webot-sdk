<?php
namespace Webot\Channel\EWeCom\Message\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Message\Response\SendResponse;
use Webot\Channel\EWeCom\Request;
/**
 * 发送混合文本消息
 * Class SendMixedTextRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setContent(array $content)
 * @method $this setToId(string $toId)
 */
class SendMixedTextRequest extends Request
{
    const SUB_TYPE_TEXT = 0;
    const SUB_TYPE_AT = 1;
    const SUB_TYPE_EMO = 2;
    /**
     * 参数说明：
     *
     *
     * setContent(array $content)
     * 必填：$content = [
     *   ['subtype' => 0, 'text' => '文本消息'],
     *   ['subtype' => 1, 'text' => '艾特的ID'],
     *   ['subtype' => 2, 'text' => '[微笑][憨笑]']
     * ]
     *
     * subtype
     * integer
     * 可选
     * =0表示普通文本
     * =1表示@人的userId, 当送0时为@所有人
     * =2表示系统表情 eg:[微笑][憨笑]
     *
     */

    /**
     * @param Application $app
     * @return SendResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): SendResponse
    {
        return $app->message->sendMixedText($this);
    }
}