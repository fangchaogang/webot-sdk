<?php
namespace Webot\Channel\YCloud\Chatroom;

use Webot\Channel\ECloud\Chatroom\Response\GetChatroomMemberResponse;
use Webot\Channel\YCloud\Account\Request\CheckAuthCountRequest;
use Webot\Channel\YCloud\Account\Request\LoginAuthRequest;
use Webot\Channel\YCloud\Account\Request\GetRobotRequest;
use Webot\Channel\YCloud\Account\Response\CheckAuthCountResponse;
use Webot\Channel\YCloud\Account\Response\LoginAuthResponse;
use Webot\Channel\YCloud\Account\Response\RobotResponse;
use Webot\Channel\YCloud\Chatroom\Request\GetChatroomListRequest;
use Webot\Channel\YCloud\Chatroom\Request\GetChatroomMemberRequest;
use Webot\Channel\YCloud\Chatroom\Response\ChatroomInfoResponse;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\YCloud\Client
{
    /**
     * 获取群列表
     * @param GetChatroomListRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function GetChatroomList(GetChatroomListRequest $request)
    {
        $chatroomList = $this->http('/wxworkapi/group/list', $request);
        $list = new Collection();
        foreach ($chatroomList as $chatroom) {
            $list->push(new ChatroomInfoResponse($chatroom));
        }
        return $list;
    }

    /**
     * 获取群成员列表
     * @param GetChatroomMemberRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function GetChatroomMember(GetChatroomMemberRequest $request)
    {
        $memberList = $this->http('/wxworkapi/group/member/list', $request);
        $list = new Collection();
        foreach ($memberList as $member) {
            $list->push(new GetChatroomMemberResponse($member));
        }
        return $list;
    }
}