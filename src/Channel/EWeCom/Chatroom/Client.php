<?php
namespace Webot\Channel\EWeCom\Chatroom;

use Webot\Channel\EWeCom\Chatroom\Request\GetChatroomListRequest;
use Webot\Channel\EWeCom\Chatroom\Request\GetContactListRequest;
use Webot\Channel\EWeCom\Chatroom\Response\ChatroomInfoResponse;
use Webot\Channel\EWeCom\Chatroom\Response\ContactResponse;
use Webot\Kernel\Support\Collection;

class Client extends \Webot\Channel\EWeCom\Client
{
    /**
     * 获取房间列表
     * @param GetChatroomListRequest $request
     * @param $app
     * @return Collection
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function getChatroomList(GetChatroomListRequest $request)
    {
        $chatroomList = $this->http('/room/batchGetRoomDetail', $request);
        $list = new Collection();
        foreach ($chatroomList['roomList'] as $chatroom) {
            $chatroomResponse = new ChatroomInfoResponse($chatroom);
            if ($request->getRelation()) {
                $memberIds = array_column($chatroomResponse->getMemberList(), 'userId');
                $contactRequest = new GetContactListRequest();
                $contactRequest->setToken($request->getToken())
                    ->setGuid($request->getGuid())
                    ->setUserIdList($memberIds);
                $response = $this->getContactList($contactRequest);
                $contactMap = $memberList = [];
                /** @var ContactResponse $contact */
                foreach ($response as $contact) {
                    $contactMap[$contact->getUserId()] = $contact->getNickname();
                }
                foreach ($chatroomResponse->getMemberList() as $member) {
                    if (isset($contactMap[$member['userId']])) {
                        $member['name'] = $contactMap[$member['userId']];
                        $memberList[] = $member;
                    }
                }
                $chatroomResponse->setMemberList($memberList);
            }

            $list->push($chatroomResponse);
        }

        return $list;
    }

    /**
     * 获取联系人详情批量
     * @param GetContactListRequest $request
     * @return Collection
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function getContactList(GetContactListRequest $request): Collection
    {
        $memberList = $this->http('/contact/batchGetUserinfo', $request);
        $list = new Collection();
        foreach ($memberList['contactList'] as $member) {
            $list->push(new ContactResponse($member));
        }
        return $list;
    }
}