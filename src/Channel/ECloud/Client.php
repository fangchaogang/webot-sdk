<?php
namespace Webot\Channel\ECloud;

use Webot\Kernel\BaseClient;
use Webot\Kernel\Exceptions\Exception;

class Client extends BaseClient
{

    /**
     * @param $uri
     * @param Request $request
     * @param array $query
     * @return mixed
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    protected function http($uri, Request $request, array $query = [])
    {
        if ($request->has('authorization')) {
            $this->setHeaders(['Authorization' => $request->getAuthorization()]);
        }
        try {
            $response = $this->httpPostJson($uri, $request->toArray(), $query);
            if (!isset($response['code']) || $response['code'] != 1000) {
                throw new Exception($response['message'] ?? '请求返回异常');
            }
            return $response['data'] ?? [];
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}