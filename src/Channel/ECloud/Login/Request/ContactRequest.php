<?php
namespace Webot\Channel\ECloud\Login\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;
use Webot\Kernel\Support\Collection;

/**
 * 获取联系人信息
 * Class ContactRequest
 * @package Webot\Channel\ECloud\Login\Request
 * @method $this setWId($wId)
 * @method $this setWcId($wcId)
 */
class ContactRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId($wId)
     * 必填：登录实例标识（设备号）
     *
     * $this setWcId($wcId)
     * 必填：好友微信id/群id,多个好友/群 以","分隔每次最多支持20个微信/群号,本接口每次调用请随机间隔300ms-800ms之间
     */

    /**
     * @param Application $app
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): Collection
    {
        return $app->login->getContact($this);
    }
}