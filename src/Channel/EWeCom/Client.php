<?php
namespace Webot\Channel\EWeCom;

use Webot\Kernel\BaseClient;
use Webot\Kernel\Exceptions\Exception;

class Client extends BaseClient
{

    /**
     * @param $uri
     * @param Request $request
     * @param array $query
     * @return array|mixed
     * @throws Exception
     */
    protected function http($uri, Request $request, array $query = [])
    {
        $params = $request->getParams();
        if (!empty($params['token'])) {
            $this->setHeaders(['X-QIWEI-TOKEN' => $params['token']]);
            unset($params['token']);
        }
        try {
            $request->set('method', $uri);
            $request->set('params', $params);
            $response = $this->httpPostJson('/qiwe/api/qw/doApi', $request->toArray(), $query);
            if (!isset($response['code']) || $response['code'] != 0) {
                throw new Exception($response['message'] ?? $response['msg'] ?? '请求返回异常');
            }
            return $response['data'] ?? [];
        } catch (\Throwable $exception) {
            throw new Exception($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}