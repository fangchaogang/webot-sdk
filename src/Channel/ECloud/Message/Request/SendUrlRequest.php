<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\SendResponse;
use Webot\Channel\ECloud\Request;

/**
 * 发送链接
 * Class SendUrlRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setWId(string $wId)
 * @method $this setWcId(string $wcId)
 * @method $this setTitle(string $title)
 * @method $this setUrl(string $url)
 * @method $this setDescription(string $description)
 * @method $this setThumbUrl(string $thumbUrl)
 */
class SendUrlRequest extends Request
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
     * setTitle(string $title)
     * 必填：标题
     *
     * setUrl(string $url)
     * 必填：跳转链接
     *
     * setDescription(string $description)
     * 必填：描述
     *
     * setThumbUrl(string $thumbUrl)
     * 必填：图标url（JPG/PNG格式,50K以内）
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
        return $app->message->sendUrl($this);
    }
}