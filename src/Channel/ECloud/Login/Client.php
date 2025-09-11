<?php
namespace Webot\Channel\ECloud\Login;

use Webot\Channel\ECloud\Login\Request\AddressListRequest;
use Webot\Channel\ECloud\Login\Request\ContactRequest;
use Webot\Channel\ECloud\Login\Request\InitAddressListRequest;
use Webot\Channel\ECloud\Login\Request\LoginECloudRequest;
use Webot\Channel\ECloud\Login\Request\LoginWechatQrRequest;
use Webot\Channel\ECloud\Login\Request\LoginWechatRequest;
use Webot\Channel\ECloud\Login\Response\AddressListResponse;
use Webot\Channel\ECloud\Login\Response\ContactResponse;
use Webot\Channel\ECloud\Login\Response\LoginECloudResponse;
use Webot\Channel\ECloud\Login\Response\LoginWechatQrResponse;
use Webot\Channel\ECloud\Login\Response\LoginWechatResponse;
use Webot\Kernel\Exceptions\Exception;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\ECloud\Client
{

    /**
     * 登录E云平台（第一步）
     * @param LoginECloudRequest $request
     * @return LoginECloudResponse
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function loginECloud(LoginECloudRequest $request): LoginECloudResponse
    {
        return new LoginECloudResponse($this->http('/member/login', $request));
    }

    /**
     * 获取二维码（第二步-方式1）
     * @param LoginWechatQrRequest $request
     * @return LoginWechatQrResponse
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function loginWechatQr(LoginWechatQrRequest $request): LoginWechatQrResponse
    {
        return new LoginWechatQrResponse($this->http('/iPadLogin', $request));
    }

    /**
     * 执行微信登录（第三步）
     * @param LoginWechatRequest $request
     * @return LoginWechatResponse
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function loginWechat(LoginWechatRequest $request): LoginWechatResponse
    {
        //return new LoginWechatResponse($this->http('/getIPadLoginInfo', $request));
        return new LoginWechatResponse($this->http('/simpleIPadLoginInfo', $request));
    }

    /**
     * 初始化通讯录列表
     * @param InitAddressListRequest $request
     * @return Collection
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function initAddressList(InitAddressListRequest  $request)
    {
        return new Collection($this->http('/initAddressList', $request) ?? []);
    }

    /**
     * 获取通讯录列表
     * @param AddressListRequest $request
     * @return AddressListResponse
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getAddressList(AddressListRequest $request): AddressListResponse
    {
        return new AddressListResponse($this->http('/getAddressList', $request));
    }

    /**
     * 获取联系人信息
     * @param ContactRequest $request
     * @return Collection
     * @throws Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getContact(ContactRequest $request): Collection
    {
        $contactList = $this->http('/getContact', $request);
        $list = new Collection();
        foreach ($contactList as $contact) {
            $list->push(new ContactResponse($contact));
        }
        return $list;
    }

}