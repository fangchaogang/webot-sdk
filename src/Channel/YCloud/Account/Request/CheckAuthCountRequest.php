<?php
namespace Webot\Channel\YCloud\Account\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;

/**
 * 检查授权码数量
 * Class LoginAuthRequest
 * @package Webot\Channel\YCloud\Account\Request
 * @method $this setBizType(int $bizType)
 * @method $this setDeviceType(int $deviceType)
 * @method $this setSubClientCode(string $subClientCode = '')
 *
 */
class CheckAuthCountRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setBizType(int $bizType)
     * 必填：4表示微信机器⼈，5表示企微机器⼈
     *
     * setDeviceType(int $deviceType)
     * 必填：
     * 个微：固定传1
     * 企微：1表示MateBot，4表示WorkBot，20表示ProBot，30表示AutoBot
     *
     * setSubClientCode(string $subClientCode = '')
     * 非必填：为null表示主账号，否则为⼦账号
     *
     */

    public function request(Application $app)
    {
        return $app->account->checkAuthCount($this);
    }
}