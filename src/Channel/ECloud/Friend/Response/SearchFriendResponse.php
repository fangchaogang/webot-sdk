<?php
namespace Webot\Channel\ECloud\Friend\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class SearchFriendResponse
 * @package Webot\Channel\ECloud\Friend\Response
 * @method getUserName()
 * @method getNickName()
 * @method getSex()
 * @method getBigHead()
 * @method getSmallHead()
 * @method getV1()
 * @method getV2()
 */
class SearchFriendResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getUserName()
     * 微信号；非好友为getV1()的值
     *
     * getNickName()
     * 微信昵称
     *
     * getSex()
     * 性别 1男
     *
     * getBigHead()
     * 大头像
     *
     * getSmallHead()
     * 小头像
     *
     * getV1()
     * 添加好友凭证1 如果是好友 会返回微信ID）唯一不变值 好友添加成功后回调会返会此值
     *
     * getV2()
     * 添加好友凭证2；如果是好友，该值为null
     *
     */

    /**
     * 返回案例：
     * 非好友：{
    "userName": "v3_020b3826fd03010000000000f3f12a6ca626c6000000501ea9a3dba12f95f6b60a0536a1adb68ece6a36c07ba5abddf6c3b58717539e2b691395304976789063b8d2936a62b31b68654289a999f9867b75e67b914070e77e68232f417bad751445140a@stranger",
    "nickName": "Jon",
    "sex": 1,
    "bigHead": "http:\/\/wx.qlogo.cn\/mmhead\/ver_1\/HLyWLC6mZJsa1beQhPq1icTeJlywqtgnRrOr5vBk32RSzicdjde0n0uHbHfiagpqfTh7Fib54ZNvIl02XK20zpGfkEUETFeZjMSSZjveuG0Rb5Q\/0",
    "smallHead": "http:\/\/wx.qlogo.cn\/mmhead\/ver_1\/HLyWLC6mZJsa1beQhPq1icTeJlywqtgnRrOr5vBk32RSzicdjde0n0uHbHfiagpqfTh7Fib54ZNvIl02XK20zpGfkEUETFeZjMSSZjveuG0Rb5Q\/132",
    "v1": "v3_020b3826fd03010000000000f3f12a6ca626c6000000501ea9a3dba12f95f6b60a0536a1adb68ece6a36c07ba5abddf6c3b58717539e2b691395304976789063b8d2936a62b31b68654289a999f9867b75e67b914070e77e68232f417bad751445140a@stranger",
    "v2": "v4_000b708f0b040000010000000000343c7fd46945351817834de7aa671000000050ded0b020927e3c97896a09d47e6e9e1abe3f37df05106a23e6898b2358b75bcaf3953592eb780555c916d919fcd26f32ac965883a3bfc24c3d7b09b64e8ff0eaf8e8836e6c5cfffa3f6534b869e51b541f890f9fee7ea54db6f46a56e9d0b93d727686ede74bd187@stranger"
    }
     * 好友：{
    "userName": "fcg_520",
    "nickName": "突破",
    "sex": 1,
    "bigHead": "http:\/\/wx.qlogo.cn\/mmhead\/ver_1\/ZY9iagbibhfH5a8kg9bM6gMsgrTOyuD5M7xaL2xeo6KrlEMotbSuNT3SqSrNHQ1f4DrugP8lia68JY6hIGmwR7pjSBdpOfiaZXGG01ZlNwBD9xJ1KJ5yUgiapnoAcTreOdpNSnxibNDOcnoicJbInHOOJR2g\/0",
    "smallHead": "http:\/\/wx.qlogo.cn\/mmhead\/ver_1\/ZY9iagbibhfH5a8kgib9bM6gMsgrTOyuD5M7xaL2xeo6KrlEMotbSuNT3SqSrNHQ1f4DrugP8lia68JY6hIGmwR7pjSBdpOfiaZXGG01ZlNwBD9xJ1KJ5yUgiapnoAcTreOdpNSnxibNDOcnoicJbInHOOJR2g\/132",
    "v1": "fcg_520",
    "v2": null
    }
     */
}