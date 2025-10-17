<?php
namespace Webot\Channel\EWeCom\Login\Response;

use Webot\Kernel\Support\Collection;
/**
 * 二维码-检测
 * Class LoginWechatQrCheckResponse
 * @package Webot\Channel\EWeCom\Login\Response
 *
 * @method getCorpId()
 * @method getCorpName()
 * @method getCorpLogo()
 * @method getLoginQrcodeKey()
 * @method getLoginQrcodeStatus()
 * @method getAvatar()
 * @method getNickname()
 * @method getUserId()
 */
class LoginWechatQrCheckResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getCorpId()
     * 企业ID
     *
     * getCorpName()
     * 企业名称
     *
     * getCorpLogo()
     * 企业LOGO
     *
     * getLoginQrcodeKey()
     * 登陆二维码KEY
     *
     * getLoginQrcodeStatus()
     * 二维码检测状态：=-1 未登陆，需要扫码登陆 =0 未登陆，可免扫码登陆 =1 已扫码，待确认 =2 登陆成功 =4 用户取消登陆 =10 已扫码确认，待检测6位验证码
     *
     * getAvatar()
     * 登陆微信的头像
     *
     * getNickname()
     * 登陆微信的昵称
     *
     * getUserId()
     * 登陆微信的wxid
     *
     */

    /**
     * 返回案例：
     *{
     * "code": 0,
     * "msg": "成功",
     * "data": {
     *  "avatar": "https://wework.qpic.cn/wwpic3az/594093_z7PJ_KMDSkW6ONS_1758178408/0",
     *  "corpId": "1970325083443705",
     *  "corpName": "快准",
     *  "corpLogo": "https://p.qlogo.cn/bizmail/589uvmQ5RpFSHQX2vKsaXHSf9K5zPr3fNre51gWYGKRwCbib1GPpCAg/0",
     *  "loginQrcodeKey": "73BE3FF34E9A4B78394984F34B89F464",
     *  "loginQrcodeStatus": 2,
     *  "nickname": "方朝罡",
     *  "userId": "1688854418340445"
     * }
     * }
     */
}