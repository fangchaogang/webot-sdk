<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\SendResponse;

/**
 * 转发视频消息
 * Class SendRecvVideoRequest
 * @package Webot\Channel\ECloud\Message\Request
 */
class SendRecvVideoRequest extends SendRecvFileRequest
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
        return $app->message->sendRecvFile($this, '/sendRecvVideo');
    }
}