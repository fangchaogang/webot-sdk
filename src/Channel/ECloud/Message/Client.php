<?php
namespace Webot\Channel\ECloud\Message;

use Webot\Channel\ECloud\Message\Request\DownloadFileRequest;
use Webot\Channel\ECloud\Message\Request\DownloadVideoRequest;
use Webot\Channel\ECloud\Message\Request\DownloadVideoResRequest;
use Webot\Channel\ECloud\Message\Request\DownloadVoiceRequest;
use Webot\Channel\ECloud\Message\Request\SendAppletsRequest;
use Webot\Channel\ECloud\Message\Request\SendFileBase64Request;
use Webot\Channel\ECloud\Message\Request\SendFileRequest;
use Webot\Channel\ECloud\Message\Request\SendImageRequest;
use Webot\Channel\ECloud\Message\Request\SendNameCardRequest;
use Webot\Channel\ECloud\Message\Request\SendRecvFileRequest;
use Webot\Channel\ECloud\Message\Request\SendTextRequest;
use Webot\Channel\ECloud\Message\Request\SendUrlRequest;
use Webot\Channel\ECloud\Message\Request\SendVideoRequest;
use Webot\Channel\ECloud\Message\Request\SendVoiceRequest;
use Webot\Channel\ECloud\Message\Request\SetNotifyUrlRequest;
use Webot\Channel\ECloud\Message\Request\UnSetNotifyUrlRequest;
use Webot\Channel\ECloud\Message\Response\DownloadFileResponse;
use Webot\Channel\ECloud\Message\Response\DownloadVideoResponse;
use Webot\Channel\ECloud\Message\Response\DownloadVideoResultResponse;
use Webot\Channel\ECloud\Message\Response\SendResponse;

class Client extends \Webot\Channel\ECloud\Client
{
    /**
     * 发送文本消息
     * @param SendTextRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendText(SendTextRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendText', $request));
    }

    /**
     * 发送文件
     * @param SendFileRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendFile(SendFileRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendFile', $request));
    }

    /**
     * 发送base64文件
     * @param SendFileBase64Request $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendFileBase64(SendFileBase64Request $request): SendResponse
    {
        return new SendResponse($this->http('/sendFileBase64', $request));
    }

    /**
     * 发送图片消息
     * @param SendImageRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendImage(SendImageRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendImage2', $request));
    }

    /**
     * 发送语音
     * @param SendVoiceRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendVoice(SendVoiceRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendVoice', $request));
    }

    /**
     * 发送视频消息
     * @param SendVideoRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendVideo(SendVideoRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendVideo', $request));
    }

    /**
     * 发送链接
     * @param SendUrlRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendUrl(SendUrlRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendUrl', $request));
    }

    /**
     * 发送名片消息
     * @param SendNameCardRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendNameCard(SendNameCardRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendNameCard', $request));
    }

    /**
     * 发送小程序
     * @param SendAppletsRequest $request
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function SendApplets(SendAppletsRequest $request): SendResponse
    {
        return new SendResponse($this->http('/sendApplets', $request));
    }

    /**
     * 转发文件消息
     * @param SendRecvFileRequest $request
     * @param string $toUri
     * @return SendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function sendRecvFile(SendRecvFileRequest $request, $toUri = '/sendRecvFile'): SendResponse
    {
        return new SendResponse($this->http($toUri, $request));
    }

    /**
     * 设置或取消 消息接收地址
     * @param SetNotifyUrlRequest | UnSetNotifyUrlRequest $request
     * @param int $option
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function setNotifyUrl($request, $option = 1)
    {
        if ($option) {
            return $this->http('/setHttpCallbackUrl', $request);
        }
        return $this->http('/cancelHttpCallbackUrl', $request);
    }

    /**
     * 下载消息文件
     * @param DownloadFileRequest $request
     * @param string $toUri
     * @return DownloadFileResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function downloadFile(DownloadFileRequest $request, $toUri = '/getMsgFile'): DownloadFileResponse
    {
        return new DownloadFileResponse($this->http($toUri, $request));
    }

    /**
     * 下载消息语音
     * @param DownloadVoiceRequest $request
     * @return DownloadFileResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function downloadVoice(DownloadVoiceRequest $request): DownloadFileResponse
    {
        return new DownloadFileResponse($this->http('/getMsgVoice', $request));
    }

    /**
     * 异步下载消息视频
     * @param DownloadVideoRequest $request
     * @return DownloadVideoResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function downloadVideo(DownloadVideoRequest $request): DownloadVideoResponse
    {
        return new DownloadVideoResponse($this->http('/asynGetMsgVideo', $request));
    }

    /**
     * 获取异步下载视频消息结果
     * @param DownloadVideoResRequest $request
     * @return DownloadVideoResultResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function downloadVideoRes(DownloadVideoResRequest $request): DownloadVideoResultResponse
    {
        return new DownloadVideoResultResponse($this->http('/getMsgVideoRes', $request));
    }
}