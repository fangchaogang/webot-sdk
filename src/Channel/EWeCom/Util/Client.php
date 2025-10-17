<?php
namespace Webot\Channel\EWeCom\Util;

use Webot\Channel\EWeCom\Util\Request\DownloadFileRequest;
use Webot\Channel\EWeCom\Util\Request\UploadFileUrlRequest;
use Webot\Channel\EWeCom\Util\Response\DownloadFileResponse;
use Webot\Channel\EWeCom\Util\Response\UploadFileUrlResponse;

class Client extends \Webot\Channel\EWeCom\Client
{
    /**
     * 文件上传-URL
     * @param UploadFileUrlRequest $request
     * @return UploadFileUrlResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function uploadFileUrl(UploadFileUrlRequest $request): UploadFileUrlResponse
    {
        return new UploadFileUrlResponse($this->http('/cloud/cdnBigUploadByUrl', $request));
    }

    /**
     * 个人微信文件下载
     * @param DownloadFileRequest $request
     * @return DownloadFileResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function downloadFile(DownloadFileRequest $request): DownloadFileResponse
    {
        return new DownloadFileResponse($this->http('/cloud/wxDownload', $request));
    }
}