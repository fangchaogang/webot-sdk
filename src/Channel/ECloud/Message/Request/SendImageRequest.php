<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\SendResponse;
use Webot\Channel\ECloud\Request;

/**
 * 发送图片消息
 * Class SendImageRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setWId(string $wId)
 * @method $this setWcId(string $wcId)
 * @method $this setContent(string $content)
 */
class SendImageRequest extends Request
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
     * 必填：图片url链接
     *
     */

    /**
     * @param Application $app
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): SendResponse
    {
        return $app->message->sendImage($this);
    }
}