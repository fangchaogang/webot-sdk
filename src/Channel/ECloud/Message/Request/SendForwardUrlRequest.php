<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\SendResponse;

/**
 * 转发链接消息
 * Class SendForwardUrlRequest
 * @package Webot\Channel\ECloud\Message\Request
 */
class SendForwardUrlRequest extends SendRecvFileRequest
{
    /**
     * @param Application $app
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): SendResponse
    {
        return $app->message->sendRecvFile($this, '/forwardUrl');
    }
}