<?php
namespace Webot\Channel\ECloud\Login\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Login\Response\LoginWechatQrResponse;
use Webot\Channel\ECloud\Request;

/**
 * 获取二维码（第二步-方式1）
 * Class LoginWechatQrRequest
 * @package Webot\Channel\ECloud\Login\Request
 * @method $this setWcId(string $wcId)
 * @method $this setProxy(int $proxy)
 * @method $this setDeviceType(string $deviceType)
 * @method $this setProxyIp(string $proxyIp)
 * @method $this setProxyUser(string $proxyUser)
 * @method $this setProxyPassword(string $proxyPassword)
 */
class LoginWechatQrRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWcId(string $wcId)
     * 必填：微信原始id （首次登录平台的号传""，掉线重登必须传值，否则会频繁掉线！！！） 第3步会返回此字段，记得入库保存
     *
     * setProxy(int $proxy)
     * 必填：
     * 1:北京2:天津3:上海4:重庆5:河北
     * 6:山西7:江苏8:浙江9:安徽10:福建
     * 11:江西12:山东13:河南14:湖北15:湖南
     * 16:广东17:海南18:四川9:云南20:陕西
     * 21:黑龙江22:辽宁23:贵州
     *
     * setProxyIp(string $proxyIp)
     * 非必填：自定义长效代理IP+端口
     *
     * setDeviceType(string $deviceType)
     * 必填：设备类型：ipad【默认】、mac、ipadpro
     *
     * setProxyUser(string $proxyUser)
     * 非必填：自定义长效代理IP平台账号
     *
     * setProxyPassword(string $proxyPassword)
     * 非必填：自定义长效代理IP平台密码
     *
     */

    /**
     * @param Application $app
     * @return LoginWechatQrResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): LoginWechatQrResponse
    {
        return $app->login->loginWechatQr($this);
    }
}