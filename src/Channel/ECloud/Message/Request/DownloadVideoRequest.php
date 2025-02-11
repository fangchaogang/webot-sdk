<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\DownloadVideoResponse;
use Webot\Channel\ECloud\Request;

/**
 * 异步下载视频消息文件
 * Class DownloadVideoRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setWId(string $wId)
 * @method $this setMsgId($msgId)
 * @method $this setContent(string $content)
 */
class DownloadVideoRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setMsgId($msgId)
     * 必填：消息id
     *
     * setContent(string $content)
     * 必填：收到的消息的xml数据
     *
     */

    /**
     * @param Application $app
     * @return DownloadVideoResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): DownloadVideoResponse
    {
        return $app->message->downloadVideo($this);
    }
}