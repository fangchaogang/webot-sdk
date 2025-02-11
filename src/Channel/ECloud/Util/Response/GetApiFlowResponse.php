<?php
namespace Webot\Channel\ECloud\Util\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class GetApiFlowResponse
 * @package Webot\Channel\ECloud\Util\Response
 * @method getAccount()
 * @method getNickName()
 * @method getWcId()
 * @method getFlow()
 * @method getSize()
 * @method getWid()
 */
class GetApiFlowResponse extends Collection
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
     * getFlow()
     * 使用流量
     *
     * getSize()
     * 使用流量（以B为单位）
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
    "flow": "2442MB",
    "size": 2560830463,
    "wid": "ec82e13a-c379-4cbe-b688-445f0a3b55df"
    },
    {
    "account": "15937177081",
    "nickName": "千配联盟#招财进宝客服19112790819",
    "wcId": "wxid_oq7v1hm5qrwv22",
    "flow": "935MB",
    "size": 981270457,
    "wid": "a323206d-bcff-42dd-a6b8-b323648e8589"
    }
    ]
     */
}