<?php
namespace Webot\Channel\EWeCom\Login\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class CreateClientResponse
 * @package Webot\Channel\EWeCom\Login\Response
 * @method getLoginQrcodeBase64Data()
 * @method getLoginQrcodeKey()
 * @method getQrUrl()
 */
class LoginWechatQrResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getLoginQrcodeBase64Data()
     * 二维码数据流:实例上登过账号&&useCache=true时为空；否则有值
     *
     * getLoginQrcodeKey()
     * 二维码key:loginQrcodeBase64Data中的key
     *
     * getQrUrl()
     * 二维码链接
     *
     */

    /**
     * 返回案例：
     *{
     * "code": 0,
     * "data": {
     * "loginQrcodeBase64Data": "/9jqo8Zbik......UUUUV//Z",
     * "loginQrcodeKey": "FFFFDDDDDFFFFFF",
     * "qrUrl": "http://api.asilu.com/qrcode/?t=https://wx.work.weixin.qq.com/cgi-bin/crtx_auth?key=8BFEA4A5E390509B1BA7C7574196CA1F&wx=1"
     * },
     * "msg": "成功"
     * }
     */
}