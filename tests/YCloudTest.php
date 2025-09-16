<?php
namespace Webot\Tests;

use Webot\Channel\ECloud\Login\Request\LoginWechatRequest;
use Webot\Channel\YCloud\Account\Request\GetRobotRequest;
use Webot\Channel\YCloud\Account\Response\RobotResponse;
use Webot\Channel\YCloud\Chatroom\Request\GetChatroomListRequest;
use Webot\Channel\YCloud\Chatroom\Request\GetChatroomMemberRequest;
use Webot\Channel\YCloud\Chatroom\Response\ChatroomInfoResponse;
use Webot\Channel\YCloud\Chatroom\Response\ChatroomMemberInfoResponse;
use Webot\Channel\YCloud\Login\Request\CreateRobotRequest;
use Webot\Channel\YCloud\Login\Request\LoginWechatCheckRequest;
use Webot\Channel\YCloud\Login\Request\loginWechatCodeRequest;
use Webot\Channel\YCloud\Login\Request\LoginWechatQrRequest;
use Webot\Channel\YCloud\Account\Request\CheckAuthCountRequest;
use Webot\Channel\YCloud\Account\Request\LoginAuthRequest;
use Webot\Channel\YCloud\Login\Request\LogoutWechatRequest;
use Webot\Channel\YCloud\Login\Request\RemoveRobotRequest;
use Webot\Channel\YCloud\Message\Request\SendImageRequest;
use Webot\Channel\YCloud\Message\Request\SendMessage;
use Webot\Channel\YCloud\Message\Request\SendTextRequest;
use Webot\Factory;

class YCloudTest extends TestCase
{
    protected $token = '440e10c2ef3a693983fedf8bec2b4ca8';
    public function testYCloud()
    {
        //$this->account();
        $this->login();
        //$this->chatroom();
        //$this->sendMessage();
    }

    public function sendMessage()
    {
//        $request = new SendTextRequest();
//        $response = $request->setToken($this->token)
//            ->setRobotKey('8eae75ff5585449e88906cc4641b8616')
//            ->setContent('text')
//            ->setFriends(['R:10811497514899376'])
//            ->setAtUserList('7881300625029378,7881300075908342')
//            ->request($this->app());
//        var_dump($response);

        $request = new SendImageRequest();
        $response = $request->setToken($this->token)
            ->setRobotKey('8eae75ff5585449e88906cc4641b8616')
            ->setPic('https://wework.qpic.cn/wwpic3az/301034_qF60xfk0Q2CxTLP_1753322826/0')
            ->setFriends(['R:10811497514899376'])
            ->request($this->app());
        var_dump($response);
    }
    public function chatroom()
    {
//        $request = new GetChatroomListRequest();
//        $response = $request->setToken($this->token)
//            ->setRobotKey('8eae75ff5585449e88906cc4641b8616')
//            ->setName('站长')
//            ->request($this->app());
//        /** @var ChatroomInfoResponse $chatroom */
//        foreach ($response as $chatroom) {
//            var_dump($chatroom->getConversationId(),$chatroom->getName(),$chatroom->getCreatorId(),$chatroom->getCreatorName(),$chatroom->getIsOuterGroupConversation(),$chatroom->getMemberCount(),$chatroom->getOuterUserCount(),$chatroom->getStatus(),$chatroom->getCreateTime(),$chatroom->getGmtCreate(),$chatroom->getGmtModify(),$chatroom->getRobotKey(),$chatroom->getRobotId());
//        }
        $request = new GetChatroomMemberRequest();
        $response = $request->setToken($this->token)
            ->setRobotKey('8eae75ff5585449e88906cc4641b8616')
            ->setConversationId('R:3049313587')
            //->setMemberName('王敏')
            //->setMemberUserId('1688850050633381')
            ->request($this->app());
        /** @var ChatroomMemberInfoResponse $member */
        foreach ($response as $member) {
            var_dump($member->getRobotKey(),$member->getConversationId(),$member->getConversationName(),$member->getUserId(),$member->getName(),$member->getStatus(),$member->getAvatorUrl(),$member->getIsCreator(),$member->getIsOuterUser(),$member->getGmtCreate(),$member->getGmtModify());
        }
    }
    public function login()
    {
//        $request = new LogoutWechatRequest();
//        $response = $request->setToken($this->token)
//            ->setBizType($request::BIZ_TYPE_QW)
//            ->setRobotKey('cba483a7202e4cdfa0f9fef7a26bb2be')
//            ->request($this->app());
//        var_dump($response);
//        $request = new LoginWechatQrRequest();
//        $response = $request->setToken($this->token)->setBizType($request::BIZ_TYPE_QW)
//            ->setRobotKey('a6b4058f265f4ae08abd68cd5bb9aa55')
//            ->request($this->app());
//        var_dump($response);
//        $request = new CreateRobotRequest();
//        $response = $request->setToken($this->token)
//            ->setBizType($request::BIZ_TYPE_QW)
//            ->setLoginType($request::DEVICE_TYPE_MATE_BOT)
//            ->setRobotType()
//            ->request($this->app());
//        var_dump($response->getRobotKey());
//        $file = './qr.png';
//        $imageData = base64_decode($response->getQrCode());
//        file_put_contents($file, $imageData);
//        $r = $response->getRobotKey();

        $request = new loginWechatCodeRequest();
        $response = $request->setToken($this->token)
            ->setRobotKey('c56e311671bc43d6bee6b7bfef0c64ba')
            ->setVcode('649959')
            ->request($this->app());
        var_dump($response);


//        $request = new LoginWechatCheckRequest();
//        $response = $request->setToken($this->token)
//            ->setRobotKey($r)
//            ->setBizType($request::BIZ_TYPE_QW)
//            ->request($this->app());
//        var_dump($response);
//
//        $request = new RemoveRobotRequest();
//        $response = $request->setToken($this->token)
//            ->setRobotKey($r)
//            ->setBizType($request::BIZ_TYPE_QW)
//            ->request($this->app());
//        var_dump($response);

    }
    protected function account()
    {
//        $request = new LoginAuthRequest();
//        $response = $request->setAccessKey('kzcf')
//            ->setAccessSecret('Kzcf2025')
//            ->request($this->app());
//        var_dump($response->getAccessToken(),$response->getExpireMinutes(),$response->getCreateTime(),$response->getUsername());

//        $request = new CheckAuthCountRequest();
//        $response = $request->setBizType($request::BIZ_TYPE_QW)
//            ->setDeviceType($request::DEVICE_TYPE_MATE_BOT)
//            ->setToken($this->token)
//            ->request($this->app());
//        var_dump($response->getDeviceType(),$response->getLicenseCount());
        $request = new GetRobotRequest();
        $response = $request->setToken($this->token)
            ->request($this->app());
        /** @var RobotResponse $robot */
        foreach ($response as $robot) {
            var_dump($robot->getRobotKey(),$robot->getWxid(),$robot->getNickName(),$robot->getHeadImg(),$robot->getMobile(),$robot->getRobotStatus(),$robot->getLastLoginTime(),$robot->getCompanyId(),$robot->getCompanyName(),$robot->getClientCode(),$robot->getMasterClientCode(),$robot->getExpireDateStart(),$robot->getExpireDateEnd());
        }

    }

    protected function app()
    {
        $config = [
            'name' => 'YCloud',
            'baseUrl' => 'https://www.yjiyun.com',
            'timeout' => 60,
            'verify' => false,
            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/robot_'.date('Ymd').'.log',
            ],
        ];
        return Factory::YCloud($config);
    }
}