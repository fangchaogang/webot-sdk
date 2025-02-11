<?php
namespace Webot\Channel\ECloud\Message\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class DownloadVideoResultResponse
 * @package Webot\Channel\ECloud\Message\Response
 * @method getId()
 * @method getUrl()
 * @method getType()
 * @method getDes()
 */
class  DownloadVideoResultResponse extends Collection
{
    /**
     * 返回参数说明
     *
     *
     * getId()
     * 异步下载视频id
     *
     * getUrl()
     * 下载成功后的视频地址
     *
     * getType()
     * 0：下载中 1：下载完成 2：下载失败
     *
     * getDes()
     * 描述
     *
     */
}