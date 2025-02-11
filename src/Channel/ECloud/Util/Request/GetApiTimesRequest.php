<?php
namespace Webot\Channel\ECloud\Util\Request;

use Webot\Channel\ECloud\Application;
use Webot\Kernel\Support\Collection;
use Webot\Channel\ECloud\Request;

/**
 * 查询接口调用次数
 * Class GetApiTimesRequest
 * @package Webot\Channel\ECloud\Util\Request
 */
class GetApiTimesRequest extends Request
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
        return $app->util->getApiTimes($this);
    }
}