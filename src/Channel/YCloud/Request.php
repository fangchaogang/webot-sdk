<?php
namespace Webot\Channel\YCloud;

use Webot\Kernel\Support\Collection;

/**
 * Class Request
 * @package Webot\Channel\YCloud
 * @method $this setToken($token)
 * @method getToken()
 */
class Request extends Collection
{
    protected $transform = false;

    const BIZ_TYPE_GW = 4;//个微信
    const BIZ_TYPE_QW = 5;//企微信
    const DEVICE_TYPE_MATE_BOT = 1;
    const DEVICE_TYPE_WORK_BOT = 4;
    const DEVICE_TYPE_PRO_BOT = 20;
    const DEVICE_TYPE_AUTO_BOT = 30;
}