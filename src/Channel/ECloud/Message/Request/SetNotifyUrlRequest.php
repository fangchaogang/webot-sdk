<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 设置消息接收地址
 * Class SetNotifyUrlRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setHttpUrl(string $httpUrl)
 * @method $this setType(int $type)
 */
class SetNotifyUrlRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setHttpUrl(string $httpUrl)
     * 必填：开发者接口回调地址
     *
     * setType(int $type)
     * 必填：2:优化版【PS：建议使用优化版】
     *
     */

    /**
     * @param Application $app
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->message->setNotifyUrl($this);
    }
}