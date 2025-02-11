<?php
namespace Webot\Channel\ECloud\Login\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class LoginWechatQrResponse
 * @package Webot\Channel\ECloud\Login\Response
 * @method getWId()
 * @method getQrCodeUrl()
 * @method getUrl()
 */
class LoginWechatQrResponse extends Collection
{
    /**
     * 返回参数说明
     *
     *
     * getWId()
     * 登录实例标识 （本值非固定的，每次重新登录会返回新的，数据库记得实时更新wid）
     *
     * getQrCodeUrl()
     * 扫码登录地址
     *
     * getUrl()
     * 扫码二维码
     *
     */

    /**
     * 返回案例：
     *{
    "wId": "cf526472-f457-4094-907e-34c9abc66c1f",
    "qrCodeUrl": "http://wxapii.oos-hazz.ctyunapi.cn/20250116/c9003f82-00f6-4383-bb65-da0879f3abfb_qrcode.png?AWSAccessKeyId=9e882e7187c38b431303&Expires=1737618323&Signature=QJGBWsWt%2FMMDCOFY2jpLeSsWww8%3D",
    "url": "http://api.asilu.com/qrcode/?t=http://weixin.qq.com/x/Qd3DrxbGuhCEPv3ui5dy"
    }
     */
}