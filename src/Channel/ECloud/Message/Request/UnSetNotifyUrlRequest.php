<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 取消消息接收地址
 * Class UnSetNotifyUrlRequest
 * @package Webot\Channel\ECloud\Message\Request
 */
class UnSetNotifyUrlRequest extends Request
{
    /**
     * @param Application $app
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->message->setNotifyUrl($this, 0);
    }
}