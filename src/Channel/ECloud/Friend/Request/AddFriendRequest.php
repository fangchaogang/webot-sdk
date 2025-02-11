<?php
namespace Webot\Channel\ECloud\Friend\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 添加好友
 * 本接口需在线3天后使用，且必须查看调用规范手册说明
 * Class AddFriendRequest
 * @package Webot\Channel\ECloud\Friend\Request
 * @method $this setWId(string $wId)
 * @method $this setV1(string $v1)
 * @method $this setV2(string $v2)
 * @method $this setType(int $type)
 * @method $this setVerify(string $verify)
 *
 */
class AddFriendRequest extends Request
{
    const TYPE_WECHAT = 3;  //微信号搜索
    const TYPE_QQ = 4;      //QQ好友
    const TYPE_CHATROOM = 8;//来自群聊
    const TYPE_MOBILE = 15; //手机号
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setV1(string $v1)
     * 必填：v1 从搜索好友接口获取
     *
     * setV2(string $v2)
     * v2 从搜索好友接口获取
     *
     * setType(int $type)
     * 添加来源3 ：微信号搜索 4 ：QQ好友 8 ：来自群聊 15：手机号;一般使用就3和15
     *
     * setVerify(string $verify)
     * 验证消息
     *
     */

    /**
     * @param Application $app
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->friend->addFriend($this);
    }
}