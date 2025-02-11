<?php
namespace Webot\Channel\ECloud\Util;

use Webot\Channel\ECloud\Util\Request\GetApiFlowRequest;
use Webot\Channel\ECloud\Util\Request\GetApiTimesRequest;
use Webot\Channel\ECloud\Util\Response\GetApiTimesResponse;
use Webot\Channel\ECloud\Util\Response\GetApiFlowResponse;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\ECloud\Client
{
    /**
     * 查询接口调用次数
     * @param GetApiTimesRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getApiTimes(GetApiTimesRequest $request): Collection
    {
        $wechatList = $this->http('/getReqTimes', $request);
        $list = new Collection();
        foreach ($wechatList as $wechat) {
            $list->push(new GetApiTimesResponse($wechat));
        }
        return $list;
    }

    /**
     * 查询使用流量
     * @param GetApiFlowRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getApiFlow(GetApiFlowRequest $request): Collection
    {
        $wechatList = $this->http('/getUserFlow', $request);
        $list = new Collection();
        foreach ($wechatList as $wechat) {
            $list->push(new GetApiFlowResponse($wechat));
        }
        return $list;
    }
}