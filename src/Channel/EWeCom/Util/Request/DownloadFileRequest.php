<?php
namespace Webot\Channel\EWeCom\Util\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Request;
/**
 * 个微文件下载
 * Class DownloadFileRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setFileAeskey(string $fileAeskey)
 * @method $this setFileAuthkey(string $fileAuthkey)
 * @method $this setFileSize(int $fileSize)
 * @method $this setFileType(int $fileType)
 * @method $this setFileUrl(string $fileUrl)
 */
class DownloadFileRequest extends Request
{

    const FILE_TYPE_BIG = 1; // 大图. 如果【接收图片消息】中的字段 image_has_hd=1,或者fileBigHttpUrl有值， 则可以使用这个
    const FILE_TYPE_SMALL = 2; // 小图. 如果image_has_hd=0，或者fileMiddleHttpUrl有值, 则应该用这个type下载
    const FILE_TYPE_THUMB = 3; // 视频/图片缩略图，对应thumb这个字段
    const FILE_TYPE_VIDEO = 4; // 视频
    const FILE_TYPE_AUDIO = 5; //文件/语音文件

    /**
     * @param Application $app
     * @return \Webot\Channel\EWeCom\Util\Response\DownloadFileResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->util->downloadFile($this);
    }
}