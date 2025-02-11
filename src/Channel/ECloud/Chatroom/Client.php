<?php
namespace Webot\Channel\ECloud\Chatroom;

use Webot\Channel\ECloud\Chatroom\Request\AddChatroomMemberRequest;
use Webot\Channel\ECloud\Chatroom\Request\AgreeChatroomInviteRequest;
use Webot\Channel\ECloud\Chatroom\Request\CreateChatroomRequest;
use Webot\Channel\ECloud\Chatroom\Request\DelChatroomMemberRequest;
use Webot\Channel\ECloud\Chatroom\Request\GetChatroomInfoRequest;
use Webot\Channel\ECloud\Chatroom\Request\GetChatroomMemberInfoRequest;
use Webot\Channel\ECloud\Chatroom\Request\GetChatroomMemberRequest;
use Webot\Channel\ECloud\Chatroom\Request\ModifyChatroomNameRequest;
use Webot\Channel\ECloud\Chatroom\Request\ModifyChatroomRemarkRequest;
use Webot\Channel\ECloud\Chatroom\Request\QuitChatroomRequest;
use Webot\Channel\ECloud\Chatroom\Request\ScanJoinRoomRequest;
use Webot\Channel\ECloud\Chatroom\Response\CreateChatroomResponse;
use Webot\Channel\ECloud\Chatroom\Response\GetChatroomInfoResponse;
use Webot\Channel\ECloud\Chatroom\Response\GetChatroomMemberResponse;
use Webot\Channel\ECloud\Chatroom\Response\GetChatroomMemberInfoResponse;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\ECloud\Client
{
    /**
     * 修改群名称
     * @param ModifyChatroomNameRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function modifyChatroomName(ModifyChatroomNameRequest $request)
    {
        return $this->http('/modifyGroupName', $request);
    }

    /**
     * 修改群备注
     * @param ModifyChatroomRemarkRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function modifyChatroomRemark(ModifyChatroomRemarkRequest $request)
    {
        return $this->http('/modifyGroupRemark', $request);
    }

    /**
     * 扫码入群
     * @param ScanJoinRoomRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function scanJoinRoom(ScanJoinRoomRequest $request)
    {
        return $this->http('/scanJoinRoom', $request);
    }

    /**
     * 创建微信群
     * @param CreateChatroomRequest $request
     * @return CreateChatroomResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function createChatroom(CreateChatroomRequest $request): CreateChatroomResponse
    {
        return new CreateChatroomResponse($this->http('/createChatroom', $request));
    }

    /**
     * 退出群聊
     * @param QuitChatroomRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function quitChatroom(QuitChatroomRequest $request)
    {
        return $this->http('/quitChatRoom', $request);
    }

    /**
     * 添加/邀请群成员
     * @param AddChatroomMemberRequest $request
     * @param string $toUri
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function addChatroomMember(AddChatroomMemberRequest $request, $toUri = '/addChatRoomMember')
    {
        return $this->http($toUri, $request);
    }

    /**
     * 删除群成员
     * @param DelChatroomMemberRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function delChatroomMember(DelChatroomMemberRequest $request)
    {
        return $this->http('/deleteChatRoomMember', $request);
    }

    /**
     * 获取群信息
     * @param GetChatroomInfoRequest $request
     * @return GetChatroomInfoResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getChatroomInfo(GetChatroomInfoRequest $request): GetChatroomInfoResponse
    {
        return new GetChatroomInfoResponse($this->http('/getChatRoomInfo', $request)[0]??[]);
    }

    /**
     * 获取群成员列表
     * @param GetChatroomMemberRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getChatroomMember(GetChatroomMemberRequest $request): Collection
    {
        $memberList = $this->http('/getChatRoomMember', $request);
        $list = new Collection();
        foreach ($memberList as $member) {
            $list->push(new GetChatroomMemberResponse($member));
        }
        return $list;
    }

    /**
     * 获取群成员详情
     * @param GetChatroomMemberInfoRequest $request
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function getChatroomMemberInfo(GetChatroomMemberInfoRequest $request): Collection
    {
        $memberInfos = $this->http('/getChatRoomMemberInfo', $request);
        $list = new Collection();
        foreach ($memberInfos as $memberInfo) {
            $list->push(new GetChatroomMemberInfoResponse($memberInfo));
        }
        return $list;
    }

    /**
     * 自动通过群（url）
     * @param AgreeChatroomInviteRequest $request
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function agreeChatroomInvite(AgreeChatroomInviteRequest $request)
    {
        return $this->http('/acceptUrl', $request);
    }
}