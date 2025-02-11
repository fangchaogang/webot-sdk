<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\DownloadFileResponse;

/**
 * 下载图片消息文件
 * Class DownloadImageRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setType(int $type)
 */
class DownloadImageRequest extends DownloadFileRequest
{

    /**
     * 参数说明：继承DownloadFileRequest参数
     *
     *
     * setType(int $type)
     * 非必填：0：常规图片 1：高清图部分图片仅有高清/缩略图，下载失败尝试两一种图片下载
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
        return $app->message->downloadFile($this, '/getMsgImg');
    }
}