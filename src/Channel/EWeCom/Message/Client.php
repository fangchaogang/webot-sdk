<?php
namespace Webot\Channel\EWeCom\Message;
use Webot\Channel\EWeCom\Message\Request\SendImageRequest;
use Webot\Channel\EWeCom\Message\Request\SendMixedTextRequest;
use Webot\Channel\EWeCom\Message\Response\SendResponse;
use Webot\Channel\EWeCom\Message\Request\SendTextRequest;

class Client extends \Webot\Channel\EWeCom\Client
{
    /**
     * 发送文本消息
     * @param SendTextRequest $request
     * @return SendResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function sendText(SendTextRequest $request): SendResponse
    {
        return new SendResponse($this->http('/msg/sendText', $request));
    }

    /**
     * 发送混合消息
     * @param SendMixedTextRequest $request
     * @return SendResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function sendMixedText(SendMixedTextRequest $request): SendResponse
    {
        return new SendResponse($this->http('/msg/sendHyperText', $request));
    }

    /**
     * 发送图片
     * @param SendImageRequest $request
     * @return SendResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function sendImage(SendImageRequest $request): SendResponse
    {
        return new SendResponse($this->http('/msg/sendImage', $request));
    }
}