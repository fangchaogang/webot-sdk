<?php
namespace Webot\Channel\ECloud\Account;

use Webot\Channel\ECloud\Account\Request\LogoutWechatRequest;
use Webot\Channel\ECloud\Account\Request\QueryIsOnlineWechatRequest;
use Webot\Channel\ECloud\Account\Request\QueryLoginWechatRequest;
use Webot\Channel\ECloud\Account\Response\QueryIsOnlineWechatResponse;
use Webot\Channel\ECloud\Account\Response\QueryLoginWechatResponse;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\ECloud\Client
{
    /**
     * 批量下线微信号
     * @param LogoutWechatRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function logoutWechat(LogoutWechatRequest $request)
    {
        return $this->http('/member/offline', $request);
    }

    /**
     * 查询账号中在线的微信列表
     * @param QueryLoginWechatRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function queryLoginWechat(QueryLoginWechatRequest $request): Collection
    {
        $wechatList = $this->http('/queryLoginWx', $request);
        $list = new Collection();
        foreach ($wechatList as $wechat) {
            $list->push(new QueryLoginWechatResponse($wechat));
        }
        return $list;
    }

    /**
     * 查询微信是否在线
     * @param QueryIsOnlineWechatRequest $request
     * @return QueryIsOnlineWechatResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function queryIsOnlineWechat(QueryIsOnlineWechatRequest $request): QueryIsOnlineWechatResponse
    {
        return new QueryIsOnlineWechatResponse($this->http('/isOnline', $request));
    }
}