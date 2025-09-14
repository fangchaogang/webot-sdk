<?php
namespace Webot\Channel\YCloud;

use Webot\Kernel\BaseClient;
use Webot\Kernel\Exceptions\Exception;

class Client extends BaseClient
{

    /**
     * @param $uri
     * @param Request $request
     * @param array $query
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|\Webot\Kernel\Support\Collection
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    protected function http($uri, Request $request, array $query = [])
    {
        $requestId = md5(uniqid());
        if ($request->has('token')) {
            $this->setHeaders(['token' => $request->getToken()]);
        }
        $response = $this->httpPostJson($uri . '?request_id=' . $requestId, $request->toArray(), $query);
        if (!isset($response['code']) || !in_array(intval($response['code']), [0, 2000, 202])) {
            throw new Exception($response['message'] ?? $response['msg'] ?? '请求返回异常');
        }
        return $response['data'] ?? $response->toArray();
    }
}