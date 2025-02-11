<?php
namespace Webot\Channel\ECloud\Login\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class LoginWechatResponse
 * @package Webot\Channel\ECloud\Login\Response
 * @method getWId()
 * @method getDeviceType()
 * @method getDeviceId()
 * @method getUin()
 * @method getWcId()
 * @method getWAccount()
 * @method getNickName()
 * @method getSignature()
 * @method getHeadUrl()
 * @method getSmallHeadImgUrl()
 * @method getMobilePhone()
 * @method getCountry()
 * @method getCity()
 * @method getStatus()
 * @method getUsername()
 */
class LoginWechatResponse extends Collection
{
    /**
     * 参数说明：
     *
     *
     * getWId() 登陆标识（设备号）
     *
     * getDeviceType() 扫码的设备类型
     *
     * getDeviceId() 设备ID
     *
     * getUin() 识别码
     *
     * getWcId() 微信ID
     *
     * getWAccount() 手机上显示的微信号 用户若手机改变微信号，本值会变）
     *
     * getNickName() 昵称
     *
     * getUsername() 用户名
     *
     * getSignature() 签名
     *
     * getHeadUrl() 头像url
     *
     * getSmallHeadImgUrl() 头像缩略图
     *
     * getMobilePhone() 绑定手机
     *
     * getCountry() 国家
     *
     * getCity() 城市
     *
     * getStatus() 保留字段
     *
     */

    /**
     * 返回案例：
     * {
    "deviceType": null,
    "country": "CN",
    "wAccount": null,
    "city": "",
    "newDevice": 1,
    "signature": null,
    "nickName": "快准车服9610",
    "sex": 0,
    "headUrl": "https://wx.qlogo.cn/mmhead/ver_1/pLxIFNuEBvyicGRl5X0GJfGibS477kelxHpAnZqdZm6Kbib2uhpc6NXrcNZFGFgEl9ibUp7ic7ZNuYNZkxGTAUDvrvyOlabDqeSnTBshR55wcicEc/0",
    "source": 1,
    "type": 1,
    "deviceId": "wx_fQBTNwzF3MX0cKQ2xpiNB",
    "mac": null,
    "smallHeadImgUrl": "https://wx.qlogo.cn/mmhead/ver_1/pLxIFNuEBvyicGRl5X0GJfGibS477kelxHpAnZqdZm6Kbib2uhpc6NXrcNZFGFgEl9ibUp7ic7ZNuYNZkxGTAUDvrvyOlabDqeSnTBshR55wcicEc/132",
    "wcId": "wxid_azgl10oxla8r22",
    "wId": "39a12290-dd7a-4273-83a5-2889d300fd5a",
    "mobilePhone": "13186959610",
    "uin": null,
    "status": 3,
    "username": "18705820286"
    }
     */

}
