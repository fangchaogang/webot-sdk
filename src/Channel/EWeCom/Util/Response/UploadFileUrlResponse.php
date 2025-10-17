<?php
namespace Webot\Channel\EWeCom\Util\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class UploadFileUrlResponse
 * @package Webot\Channel\EWeCom\Message\Response
 * @method getFileAesKey()
 * @method getFileId()
 * @method getFileKey()
 * @method getFileMd5()
 * @method getFileSize()
 */
class UploadFileUrlResponse extends Collection
{

    /**
     * 返回案例
     * {
     * "code": 0,
     * "msg": "成功",
     * "data": {
     * "fileAesKey": "a95cbee50767407f93004bf679a50256",
     * "fileId": "306b0201020464306202010002040faeba5d02030f42410204b63066b4020468f06246042461393563626565352d303736372d343037662d393330302d3462663637396135303235360203102000020301186004107859b43e9eeae54464cecc2c37bf9c1b0201010201000400",
     * "fileKey": "a95cbee5-0767-407f-9300-4bf679a50256",
     * "fileMd5": "7859b43e9eeae54464cecc2c37bf9c1b",
     * "fileSize": 71772,
     * "fileThumbSize": 4620,
     * "durationTime": 0
     * }
     * }
     * }
     */
}