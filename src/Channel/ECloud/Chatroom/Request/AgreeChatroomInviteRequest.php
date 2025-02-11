<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 同意群邀请
 * 自动通过群（url）
 * Class AgreeChatroomInviteRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setUrl(string $url)
 *
 */
class AgreeChatroomInviteRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setUrl(string $url)
     * 必填：原始 url，好友发送的入群邀请卡片信息链接(回调中取)
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
        return $app->chatroom->agreeChatroomInvite($this);
    }
}