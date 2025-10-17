<?php
namespace Webot\Channel\EWeCom\Util\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Util\Response\UploadFileUrlResponse;
use Webot\Channel\EWeCom\Request;
/**
 * 文件上传-URL
 * Class UploadFileUrlRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setFilename(string $filename)
 * @method $this setFileUrl(string $fileUrl)
 * @method $this setFileType(int $fileType)
 */
class UploadFileUrlRequest extends Request
{
    const FILE_TYPE_JPG = 1; // jpg图片
    const FILE_TYPE_MP4 = 4; // mp4视频
    const FILE_TYPE_GIF = 5; // 文件(也包括语音amr文件)

    /**
     * @param Application $app
     * @return UploadFileUrlResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): UploadFileUrlResponse
    {
        return $app->util->uploadFileUrl($this);
    }

}