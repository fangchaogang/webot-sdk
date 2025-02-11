<?php
namespace Webot\Channel\ECloud\Login\Request;

use Webot\Channel\ECloud\Application;
use Webot\Kernel\Support\Collection;
use Webot\Channel\ECloud\Request;

/**
 * 初始化通讯录列表
 * Class InitAddressListRequest
 * @package Webot\Channel\ECloud\Login\Request
 * @method $this setWId($wId)
 */
class InitAddressListRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId($wId)
     * 必填：登录实例标识
     *
     */

    /**
     * 本接口为耗时接口(返回在10s-3min之间)，建议仅每次登录成功后调用一次至本地数据库，本接口和获取通讯录列表接口为组合接口
     * @param Application $app
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): Collection
    {
        return $app->login->initAddressList($this);
    }
}