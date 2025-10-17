<?php
namespace Webot\Channel\EWeCom\Login\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Request;
/**
 * 恢复实例（自动登陆）
 * Class CreateClientRequest
 * @package Webot\Channel\EWeCom\Login\Request
 * @method $this setGuid(string $guid)
 */
class RestoreClientRequest extends Request
{
    /**
     * @param Application $app
     * @return array|mixed
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->login->restoreClient($this);
    }
}