<?php
namespace Webot\Channel\ECloud\Chatroom\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class GetChatroomMemberInfoResponse
 * @package Webot\Channel\ECloud\Chatroom\Response
 * @method getUserName()
 * @method getNickName()
 * @method getRemark()
 * @method getSignature()
 * @method getSex()
 * @method getCountry()
 * @method getProvince()
 * @method getCity()
 * @method getBigHead()
 * @method getSmallHead()
 * @method getV1()
 * @method getV2()
 */
class GetChatroomMemberInfoResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getUserName()
     * 微信ID
     *
     * getNickName()
     * 微信昵称
     *
     * getRemark()
     * 备注
     *
     * getSignature()
     * 微信签名
     *
     * getSex()
     * 性别 1男
     *
     * getCountry()
     * 国家
     *
     * getProvince()
     * 省份
     *
     * getCity()
     * 城市
     *
     * getBigHead()
     * 大头像
     *
     * getSmallHead()
     * 小头像
     *
     * getV1()
     * getV2()
     *
     */

    /**
     * 返回案例：
     *[
    {
    "userName": "fcg_520",
    "nickName": "突破",
    "remark": null,
    "signature": "看懂人心！",
    "sex": 1,
    "aliasName": null,
    "country": "BI",
    "province": null,
    "city": null,
    "bigHead": "https://wx.qlogo.cn/mmhead/ver_1/HIIvHdeiaYWoMojibnfapDAqmI2vwcqzwa6R8GtyZE9OhibSicicwbtzEhP5qpYfaO4CjNKAe8syeStsXxKcWLu2sur4vzx93bXrkpU0jlz4uPUcibQ5w6iaZlticA2FvS4sqCs276zNVK5MYA2JPh9icNP6d5Q/0",
    "smallHead": "https://wx.qlogo.cn/mmhead/ver_1/HIIvHdeiaYWoMojibnfapDAqmI2vwcqzwa6R8GtyZE9OhibSicicwbtzEhP5qpYfaO4CjNKAe8syeStsXxKcWLu2sur4vzx93bXrkpU0jlz4uPUcibQ5w6iaZlticA2FvS4sqCs276zNVK5MYA2JPh9icNP6d5Q/132",
    "labelList": null,
    "v1": null,
    "v2": null
    }
    ]
     */
}