<?php
namespace Webot\Channel\ECloud\Friend\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 同意添加好友
 * 本接口需在线3天后使用，且必须查看调用规范手册说明
 * Class AgreeFriendVerifyRequest
 * @package Webot\Channel\ECloud\Friend\Request
 * @method $this setWId(string $wId)
 * @method $this setV1(string $v1)
 * @method $this setV2(string $v2)
 * @method $this setType(int $type)
 *
 */
class AgreeFriendVerifyRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setV1(string $v1)
     * 必填：v1（从消息回调中取）
     *
     * setV2(string $v2)
     * 必填：v2（从消息回调中取）
     *
     * setType(int $type)
     * 必填：取回调中的scene来源
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
        return $app->friend->agreeFriendVerify($this);
    }

}