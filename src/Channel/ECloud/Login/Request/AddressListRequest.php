<?php
namespace Webot\Channel\ECloud\Login\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Login\Response\AddressListResponse;
use Webot\Channel\ECloud\Request;

/**
 * 获取通讯录列表
 * Class AddressListRequest
 * @package Webot\Channel\ECloud\Login\Request
 * @method $this setWId($wId)
 */
class AddressListRequest extends Request
{
    /**
     * 获取通讯录列表之前，必须调用初始化通讯录列表接口。
     * 此接口不会返回好友/群的详细信息，如需获取详细信息，请调用获取联系人详情接口
     * @param Application $app
     * @return AddressListResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): AddressListResponse
    {
        return $app->login->getAddressList($this);
    }
}