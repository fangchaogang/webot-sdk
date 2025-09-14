<?php
namespace Webot\Channel\YCloud\Account\Request;

use Webot\Channel\YCloud\Application;
use Webot\Channel\YCloud\Request;

/**
 * 获取机器人列表
 * Class LoginAuthRequest
 * @package Webot\Channel\YCloud\Account\Request
 *
 */
class GetRobotRequest extends Request
{


    /**
     * @param Application $app
     * @return \Webot\Kernel\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->account->getRobotList($this);
    }
}