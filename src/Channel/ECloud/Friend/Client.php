<?php
namespace Webot\Channel\ECloud\Friend;

use Webot\Channel\ECloud\Friend\Request\AddFriendRequest;
use Webot\Channel\ECloud\Friend\Request\AgreeFriendVerifyRequest;
use Webot\Channel\ECloud\Friend\Request\CheckFriendStatusRequest;
use Webot\Channel\ECloud\Friend\Request\SearchFriendRequest;
use Webot\Channel\ECloud\Friend\Response\CheckFriendStatusResponse;
use Webot\Channel\ECloud\Friend\Response\SearchFriendResponse;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\ECloud\Client
{
    /**
     * 搜索联系人
     * @param SearchFriendRequest $request
     * @return SearchFriendResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function searchFriend(SearchFriendRequest $request): SearchFriendResponse
    {
        return new SearchFriendResponse($this->http('/searchUser', $request));
    }

    /**
     * 添加好友(与搜索联系人配合使用)
     * @param AddFriendRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function addFriend(AddFriendRequest $request)
    {
        return $this->http('/addUser', $request);
    }

    /**
     * 同意添加好友
     * @param AgreeFriendVerifyRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function agreeFriendVerify(AgreeFriendVerifyRequest $request)
    {
        return $this->http('/acceptUser', $request);
    }

    /**
     * 检测好友状态
     * @param CheckFriendStatusRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function checkFriendStatus(CheckFriendStatusRequest $request): Collection
    {
        $friends = $this->http('/checkZombie', $request);
        $list = new Collection();
        foreach ($friends as $friend) {
            $list->push(new CheckFriendStatusResponse($friend));
        }
        return $list;
    }
}