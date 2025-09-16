<?php
namespace Webot\Channel\YCloud\Login;

use Webot\Channel\YCloud\Login\Request\LogoutWechatRequest;
use Webot\Channel\YCloud\Login\Request\LoginWechatCheckRequest;
use Webot\Channel\YCloud\Login\Request\LoginWechatCodeRequest;
use Webot\Channel\YCloud\Login\Request\LoginWechatQrRequest;
use Webot\Channel\YCloud\Login\Request\CreateRobotRequest;
use Webot\Channel\YCloud\Login\Request\RemoveRobotRequest;
use Webot\Channel\YCloud\Login\Response\CreateRobotResponse;
use Webot\Channel\YCloud\Login\Response\LoginWechatQrResponse;
use Webot\Kernel\Exceptions\Exception;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\YCloud\Client
{
    /**
     * 创建机器人
     * @param CreateRobotRequest $request
     * @return CreateRobotResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function createRobot(CreateRobotRequest $request): CreateRobotResponse
    {
        return new CreateRobotResponse($this->http('/mscenter/api/robotapi/create_robot', $request));
    }

    /**
     * 删除机器人
     * @param RemoveRobotRequest $request
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function removeRobot(RemoveRobotRequest $request): bool
    {
        return $this->http('/robotapi/robot/remove', $request);
    }

    /**
     * 获取二维码
     * @param LoginWechatQrRequest $request
     * @return LoginWechatQrResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function loginWechatQr(LoginWechatQrRequest $request): LoginWechatQrResponse
    {
        return new LoginWechatQrResponse($this->http('/wxworkapi/robot/qrcode', $request));
    }

    /**
     * 提交验证码
     * @param loginWechatCodeRequest $request
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function loginWechatCode(loginWechatCodeRequest $request)
    {
        return $this->http('/wxworkapi/robot/vcode/set', $request);
    }

    /**
     * 登陆检查
     * @param LoginWechatCheckRequest $request
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function loginWechatCheck(LoginWechatCheckRequest $request)
    {
        $response = $this->http('/wxworkapi/robot/logincheck', $request);
        if (!empty($response['msg']) && $response['msg'] == '请扫码登录') {
            $response['code'] = -1;
            throw new Exception($response['msg'], $response['code']);
        }
        return $response;
    }

    /**
     * 下线微信
     * @param LogoutWechatRequest $request
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function logoutWechat(LogoutWechatRequest $request)
    {
        return $this->http('/wxworkapi/robot/logout', $request);
    }

}