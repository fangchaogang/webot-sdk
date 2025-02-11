<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\DownloadFileResponse;
use Webot\Channel\ECloud\Request;

/**
 * 下载消息语音
 * Class DownloadVoiceRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setWId(string $wId)
 * @method $this setMsgId($msgId)
 * @method $this setLength(int $length)
 * @method $this setBufId(string $bufId)
 * @method $this setFromUser(string $fromUser)
 */
class DownloadVoiceRequest extends Request
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
     * setLength(int $length)
     * 必填：语音长度（xml数据中的length字段）
     *
     * setBufId(string $bufId)
     * 必填：xml中返回的bufId字段值
     *
     * setFromUser(string $fromUser)
     * 必填：发送者微信ID
     *
     */

    /**
     * @param Application $app
     * @return DownloadFileResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): DownloadFileResponse
    {
        return $app->message->downloadVoice($this);
    }
}