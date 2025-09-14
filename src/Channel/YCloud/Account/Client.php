<?php
namespace Webot\Channel\YCloud\Account;

use Webot\Channel\YCloud\Account\Request\CheckAuthCountRequest;
use Webot\Channel\YCloud\Account\Request\LoginAuthRequest;
use Webot\Channel\YCloud\Account\Request\GetRobotRequest;
use Webot\Channel\YCloud\Account\Response\CheckAuthCountResponse;
use Webot\Channel\YCloud\Account\Response\LoginAuthResponse;
use Webot\Channel\YCloud\Account\Response\RobotResponse;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\YCloud\Client
{
    /**
     * 登陆授权
     * @param LoginAuthRequest $request
     * @return array|mixed|object|\Psr\Http\Message\ResponseInterface|string|Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function loginAuth(LoginAuthRequest $request): LoginAuthResponse
    {
        return new LoginAuthResponse($this->http('/robotapi/client/auth', $request));
    }

    /**
     * 检查授权码数量
     * @param CheckAuthCountRequest $request
     * @return CheckAuthCountResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function checkAuthCount(CheckAuthCountRequest $request)
    {
        return new CheckAuthCountResponse($this->http('/wxworkapi/robot/payrecord', $request));
    }

    /**
     * 获取机器人列表
     * @param GetRobotRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getRobotList(GetRobotRequest $request)
    {
        $robotList = $this->http('/wxworkapi/robot/list', $request)['model'];
        $list = new Collection();
        foreach ($robotList as $robot) {
            $list->push(new RobotResponse($robot));
        }
        return $list;
    }
}