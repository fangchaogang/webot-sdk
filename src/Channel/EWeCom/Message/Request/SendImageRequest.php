<?php
namespace Webot\Channel\EWeCom\Message\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Message\Response\SendResponse;
use Webot\Channel\EWeCom\Request;
/**
 * 发送图片消息
 * Class SendImageRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setFileAesKey(string $fileAesKey)
 * @method $this setFileId(string $fileId)
 * @method $this setFileKey(string $fileKey)
 * @method $this setFileMd5(string $fileMd5)
 * @method $this setFileSize(int $fileSize)
 * @method $this setFilename(string $filename)
 * @method $this setToId(string $toId)
 */
class SendImageRequest extends Request
{

    /**
     * @param Application $app
     * @return SendResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): SendResponse
    {
        return $app->message->sendImage($this);
    }
}