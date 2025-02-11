<?php
namespace Webot\Channel\ECloud\Util\Request;

use Webot\Channel\ECloud\Application;
use Webot\Kernel\Support\Collection;
use Webot\Channel\ECloud\Request;

/**
 * 查询使用流量
 * Class GetApiFlowRequest
 * @package Webot\Channel\ECloud\Util\Request
 */
class GetApiFlowRequest extends Request
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
        return $app->util->getApiFlow($this);
    }
}