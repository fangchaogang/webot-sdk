<?php
namespace Webot\Channel\ECloud\Util\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class GetApiTimesResponse
 * @package Webot\Channel\ECloud\Util\Response
 * @method getAccount()
 * @method getNickName()
 * @method getWcId()
 * @method getTimes()
 * @method getWid()
 */
class GetApiTimesResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getAccount()
     * 开发者账号
     *
     * getNickName()
     * 微信昵称
     *
     * getWcId()
     * 微信id
     *
     * getTimes()
     * 接口调用次数
     *
     * getWid()
     * 登录实例标识
     *
     */

    /**
     * 返回案例：
     * [
    {
    "account": "15937177081",
    "nickName": "联心联盟客服18185568313",
    "wcId": "wxid_pjs9ya05cc4r22",
    "times": 80154,
    "wid": "ec82e13a-c379-4cbe-b688-445f0a3b55df"
    },
    {
    "account": "15937177081",
    "nickName": "千配联盟#招财进宝客服19112790819",
    "wcId": "wxid_oq7v1hm5qrwv22",
    "times": 31597,
    "wid": "a323206d-bcff-42dd-a6b8-b323648e8589"
    }
    ]
     */

}