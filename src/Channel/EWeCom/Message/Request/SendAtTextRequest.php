<?php
namespace Webot\Channel\EWeCom\Message\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Message\Response\SendResponse;
use Webot\Channel\EWeCom\Request;
/**
 * 发送艾特文本消息
 * Class SendAtTextRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setContent(string $content)
 * @method $this setAtId(string $atId)
 * @method $this setToId(string $toId)
 *
 * @method getGuid()
 * @method getContent()
 * @method getAtId()
 * @method getToId()
 */
class SendAtTextRequest extends Request
{
    /**
     * @param Application $app
     * @return SendResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): SendResponse
    {
        $content = [
            ['subtype' => SendMixedTextRequest::SUB_TYPE_AT, 'text' => $this->getAtId()],
            ['subtype' => SendMixedTextRequest::SUB_TYPE_TEXT, 'text' => $this->getContent()],
        ];
        $request = new SendMixedTextRequest();
        return $request->setToken($this->getToken())
            ->setGuid($this->getGuid())
            ->setContent($content)
            ->setToId($this->getToId())
            ->request($app);
    }
}