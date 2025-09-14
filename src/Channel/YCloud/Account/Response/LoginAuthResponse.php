<?php
namespace Webot\Channel\YCloud\Account\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class LoginAuthResponse
 * @package Webot\Channel\YCloud\Account\Response
 * @method getExpireMinutes()
 * @method getAccessToken()
 * @method getUsername()
 */
class LoginAuthResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getExpireMinutes()
     * 有期时间（分钟）
     *
     * getAccessToken()
     * accessToken
     *
     * getUsername()
     * ⽤户名
     *
     */

    public function getCreateTime()
    {
        $createTime = $this->get('createTime');
        $createTime = bcdiv($createTime, 1000);
        return date('Y-m-d H:i:s', $createTime);
    }
}