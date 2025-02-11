<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\SendResponse;
use Webot\Channel\ECloud\Request;

/**
 * 发送base64文件
 * Class SendFileBase64Request
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setWId(string $wId)
 * @method $this setWcId(string $wcId)
 * @method $this setFileName(string $fileName)
 * @method $this setBase64(string $base64)
 */
class SendFileBase64Request extends Request
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
     * setFileName(string $fileName)
     * 必填：文件名
     *
     * setBase64(string $base64)
     * 必填：文件Base64
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
        return $app->message->sendFileBase64($this);
    }
}