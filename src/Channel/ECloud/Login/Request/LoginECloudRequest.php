<?php
namespace Webot\Channel\ECloud\Login\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;
use Webot\Channel\ECloud\Login\Response\LoginECloudResponse;

/**
 * 登录E云平台（第一步）
 * Class LoginECloudRequest
 * @package Webot\Channel\ECloud\Login\Request
 * @method $this setAccount(string $account)
 * @method $this setPassword(string $password)
 */
class LoginECloudRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setAccount(string $account)
     * 必填：开发者账号
     *
     * setPassword(string $password)
     * 必填：开发者密码
     *
     */

    /**
     * @param Application $app
     * @return LoginECloudResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app): LoginECloudResponse
    {
        return $app->login->loginECloud($this);
    }
}