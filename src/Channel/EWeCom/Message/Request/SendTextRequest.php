<?php
namespace Webot\Channel\EWeCom\Message\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Message\Response\SendResponse;
use Webot\Channel\EWeCom\Request;
/**
 * 发送文本消息
 * Class SendTextRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setContent(string $content)
 * @method $this setToId(string $toId)
 */
class SendTextRequest extends Request
{

    /**
     * @param Application $app
     * @return SendResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): SendResponse
    {
        return $app->message->sendText($this);
    }

}