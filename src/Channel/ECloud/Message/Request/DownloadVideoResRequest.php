<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\DownloadVideoResultResponse;
use Webot\Channel\ECloud\Request;

/**
 * 异步下载视频消息文件结果
 * Class DownloadVideoResRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setId(string $id)
 */
class DownloadVideoResRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setId(string $id)
     * 必填：异步下载视频接口返回的id > DownloadVideoRequest
     *
     */

    /**
     * @param Application $app
     * @return DownloadVideoResultResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): DownloadVideoResultResponse
    {
        return $app->message->downloadVideoRes($this);
    }
}