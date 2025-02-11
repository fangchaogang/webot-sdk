<?php
namespace Webot\Channel\ECloud\Account\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 批量下线微信号
 * Class LogoutWechatRequest
 * @package Webot\Channel\ECloud\Account\Request
 * @method $this setAccount(string $account)
 * @method $this setWcIds(array $wcIds)
 */
class LogoutWechatRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setAccount(string $account)
     * 必填：账号
     *
     * setWcIds(array $wcIds)
     * 必填：须下线的微信id
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
        return $app->account->logoutWechat($this);
    }
}