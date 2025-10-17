<?php
namespace Webot\Channel\EWeCom\Login;

use Webot\Channel\EWeCom\Login\Request\CreateClientRequest;
use Webot\Channel\EWeCom\Login\Request\LoginWechatQrCheckRequest;
use Webot\Channel\EWeCom\Login\Request\LoginWechatQrRequest;
use Webot\Channel\EWeCom\Login\Request\RestoreClientRequest;
use Webot\Channel\EWeCom\Login\Request\StopClientRequest;
use Webot\Channel\EWeCom\Login\Response\CreateClientResponse;
use Webot\Channel\EWeCom\Login\Response\LoginWechatQrCheckResponse;
use Webot\Channel\EWeCom\Login\Response\LoginWechatQrResponse;

class Client extends \Webot\Channel\EWeCom\Client
{
    /**
     * 创建设备
     * @param CreateClientRequest $request
     * @return CreateClientResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function createClient(CreateClientRequest $request): CreateClientResponse
    {
        return new CreateClientResponse($this->http('/client/createClient', $request));
    }

    /**
     * 恢复实例（自动登陆）
     * @param RestoreClientRequest $request
     * @return array|mixed
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function restoreClient(RestoreClientRequest $request)
    {
        return $this->http('/client/restoreClient', $request);
    }

    /**
     * 停止实例
     * @param StopClientRequest $request
     * @return array|mixed
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function stopClient(StopClientRequest $request)
    {
        return $this->http('/client/stopClient', $request);
    }

    /**
     * 二维码-获取
     * @param LoginWechatQrRequest $request
     * @return LoginWechatQrResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function loginWechatQr(LoginWechatQrRequest $request)
    {
        return new LoginWechatQrResponse($this->http('/login/getLoginQrcode', $request));
    }

    /**
     * 二维码-检测
     * @param LoginWechatQrCheckRequest $request
     * @return LoginWechatQrCheckResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function loginWechatQrCheck(LoginWechatQrCheckRequest $request)
    {
        return new LoginWechatQrCheckResponse($this->http('/login/checkLoginQrCode', $request));
    }

}