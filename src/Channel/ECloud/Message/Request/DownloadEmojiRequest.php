<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\DownloadFileResponse;

/**
 * 下载Emoji消息文件
 * Class DownloadEmojiRequest
 * @package Webot\Channel\ECloud\Message\Request
 */
class DownloadEmojiRequest extends DownloadFileRequest
{
    /**
     * @param Application $app
     * @return DownloadFileResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): DownloadFileResponse
    {
        return $app->message->downloadFile($this, '/getMsgEmoji');
    }
}