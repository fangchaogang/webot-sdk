<?php
namespace Webot\Channel\ECloud\Friend\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Friend\Response\SearchFriendResponse;
use Webot\Channel\ECloud\Request;

/**
 * 搜索联系人
 * Class SearchFriendRequest
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setWcId(string $wcId)
 */
class SearchFriendRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setWcId(string $wcId)
     * 必填：微信号/手机号 (不支持微信id搜索)
     *
     */

    /**
     * @param Application $app
     * @return SearchFriendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): SearchFriendResponse
    {
        return $app->friend->searchFriend($this);
    }
}