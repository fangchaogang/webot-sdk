<?php
namespace Webot\Channel\ECloud\Account\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class QueryLoginWechatResponse
 * @package Webot\Channel\ECloud\Account\Response
 * @method getWId()
 * @method getWcId()
 */
class QueryLoginWechatResponse extends Collection
{

    /**
     * 返回参数说明：
     *
     *
     * getWId()
     * 登录实例标识
     *
     * getWcId()
     * 登陆的微信ID
     *
     */

    /**
    * 返回案例：
    *[
        {
        "wcId": "wxid_i6qsbbjenju2",
        "wId": "72223018-7f2a-4f4f-bfa3-26e47dbd61"
        }
    ]
    */
}