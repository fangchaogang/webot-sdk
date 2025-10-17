<?php
namespace Webot\Channel\EWeCom\Account\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class WechatStatusResponse
 * @package Webot\Channel\EWeCom\Account\Response
 * @method getUserOnlineStatus()
 * @method getNickname()
 * @method getUserId()
 * @method getCorpLogo()
 * @method getCorpName()
 */
class WechatStatusResponse extends Collection
{

    /**
     * 返回参数说明：
     *
     *
     * getCorpName()
     * 企业名称
     *
     * getCorpLogo()
     * 企业LOGO
     *
     * getUserOnlineStatus()
     * 二维码检测状态：=-1 未登陆，需要扫码登陆 =0 未登陆，可免扫码登陆 =1 已扫码，待确认 =2 登陆成功 =4 用户取消登陆 =10 已扫码确认，待检测6位验证码
     *
     * getNickname()
     * 登陆微信的昵称
     *
     * getUserId()
     * 登陆微信的wxid
     *
     */
}