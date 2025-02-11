<?php
namespace Webot\Channel\ECloud\Friend\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class CheckFriendStatusResponse
 * @package Webot\Channel\ECloud\Friend\Response
 * @method getUserName()
 * @method getStatus()
 */
class CheckFriendStatusResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getUserName()
     * 微信id
     *
     * getStatus()
     * 0: 正常 1: 被删除 2: 被拉黑 6: 非好友
     *
     */
}