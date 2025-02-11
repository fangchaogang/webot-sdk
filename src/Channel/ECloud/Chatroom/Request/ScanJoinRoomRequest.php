<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 扫码入群
 * 好友将群二维码发送给机器人，机器人调用本接口将自动识别入群
 * Class ScanJoinRoomRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setUrl(string $url)
 * @method $this setType(int $type)
 */
class ScanJoinRoomRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setUrl(string $url)
     * 必填：群二维码url（二维码解析后的url）
     *
     * setType(int $type)
     * 非必填：操作类型，默认0 0: 进群 1:返回群名称及人数 10:返回原始html数据
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
        return $app->chatroom->scanJoinRoom($this);
    }
}