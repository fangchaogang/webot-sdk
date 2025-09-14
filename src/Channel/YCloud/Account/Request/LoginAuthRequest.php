<?php
namespace Webot\Channel\YCloud\Account\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;

/**
 * 授权登陆
 * Class LoginAuthRequest
 * @package Webot\Channel\YCloud\Account\Request
 * @method $this setAccessKey(string $account)
 * @method $this setAccessSecret(string $accessSecret)
 */
class LoginAuthRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setAccessKey(string $account)
     * 必填：帐号
     *
     * setAccessSecret(string $accessSecret)
     * 必填：密码
     */

    /**
     * @param Application $app
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|\Webot\Channel\YCloud\Account\Response\LoginAuthResponse|\Webot\Kernel\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->account->loginAuth($this);
    }
}