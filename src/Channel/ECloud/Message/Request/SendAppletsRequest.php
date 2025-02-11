<?php
namespace Webot\Channel\ECloud\Message\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Message\Response\SendResponse;
use Webot\Channel\ECloud\Request;

/**
 * 发送小程序
 * Class SendAppletsRequest
 * @package Webot\Channel\ECloud\Message\Request
 * @method $this setWId(string $wId)
 * @method $this setWcId(string $wcId)
 * @method $this setDisplayName(string $displayName)
 * @method $this setIconUrl(string $iconUrl)
 * @method $this setAppId(string $appId)
 * @method $this setPagePath(string $pagePath)
 * @method $this setThumbUrl(string $thumbUrl)
 * @method $this setTitle(string $title)
 * @method $this setUserName(string $userName)
 */
class SendAppletsRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setWcId(string $wcId)
     * 必填：接收人微信id/群id
     *
     * setDisplayName(string $displayName)
     * 必填：小程序的名称，例如：京东
     *
     * setIconUrl(string $iconUrl)
     * 必填：小程序卡片图标的url (50KB以内的png/jpg)
     *
     * setAppId(string $appId)
     * 必填：小程序的appID,例如：wx7c544xxxxxx
     *
     * setPagePath(string $pagePath)
     * 必填：点击小程序卡片跳转的url
     *
     * setThumbUrl(string $thumbUrl)
     * 必填：小程序卡片缩略图的url (50KB以内的png/jpg)
     *
     * setTitle(string $title)
     * 必填：标题
     *
     * setUserName(string $userName)
     * 必填：小程序所有人的ID,例如：gh_1c0daexxxx@app
     *
     * {
    "wId": "0000016f-78bd-21c8-0001-29c4d004ae46",
    "wcId": "filehelper",
    "displayName": "云铺海购",
    "iconUrl": "无用",
    "appId": "wx07af7e375d21a08c",
    "pagePath": "pages/home/dashboard/index.html?shopAutoEnter=1&is_share=1&share_cmpt=native_wechat&kdt_id=109702811&from_uuid=FgPTe5LTPr00dw21663912217667",
    "thumbUrl": "https://pic3.zhimg.com/v2-f73763905eed23308466e441430a43be_r.jpg",
    "title": "云铺海购",
    "userName": "gh_12566478d436@app"
    }
     *
     */

    /**
     * @param Application $app
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): SendResponse
    {
        return $app->message->SendApplets($this);
    }
}