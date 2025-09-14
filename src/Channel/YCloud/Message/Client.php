<?php
namespace Webot\Channel\YCloud\Message;

use Webot\Channel\YCloud\Message\Request\SendMessage;

class Client extends \Webot\Channel\YCloud\Client
{
    /**
     * @param SendMessage $message
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|\Webot\Kernel\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendMessage(SendMessage $message)
    {
        $response = $this->http('/wxworkapi/message/exchange', $message);
        if (!empty($response['msg']) && !empty($response['msg'] == 'OK')) {
            $response['code'] = 0;
        }
        return $response;
    }
}