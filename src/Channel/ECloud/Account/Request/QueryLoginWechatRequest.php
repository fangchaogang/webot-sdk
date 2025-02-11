<?php
namespace Webot\Channel\ECloud\Account\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;
use Webot\Kernel\Support\Collection;

/**
 * 查询账号中在线的微信列表
 * Class QueryLoginWechatRequest
 * @package Webot\Channel\ECloud\Account\Request
 */
class QueryLoginWechatRequest extends Request
{

    /**
     * @param Application $app
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): Collection
    {
        return $app->account->queryLoginWechat($this);
    }
}