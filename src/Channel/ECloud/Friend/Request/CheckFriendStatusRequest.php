<?php
namespace Webot\Channel\ECloud\Friend\Request;

use Webot\Channel\ECloud\Application;
use Webot\Kernel\Support\Collection;
use Webot\Channel\ECloud\Request;

/**
 * 检测好友状态
 * 本接口调用需要间隔1-3S
 * Class CheckFriendStatusRequest
 * @package Webot\Channel\ECloud\Friend\Request
 * @method $this setWId(string $wId)
 * @method $this setWcId(string $wcId)
 *
 */
class CheckFriendStatusRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setWcId(string $wcId)
     * 必填：好友微信id，多个已","分隔,每次最多支持个20
     *
     */

    /**
     * @param Application $app
     * @return \Webot\Kernel\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): Collection
    {
        return $app->friend->checkFriendStatus($this);
    }
}