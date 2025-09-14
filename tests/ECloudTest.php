<?php
namespace Webot\Tests;

use Webot\Channel\ECloud\Account\Request\LoginAuthRequest;
use Webot\Channel\ECloud\Account\Request\QueryIsOnlineWechatRequest;
use Webot\Channel\ECloud\Account\Request\QueryLoginWechatRequest;
use Webot\Channel\ECloud\Account\Response\CheckAuthCountResponse;
use Webot\Channel\ECloud\Chatroom\Request\AgreeChatroomInviteRequest;
use Webot\Channel\ECloud\Chatroom\Request\GetChatroomInfoRequest;
use Webot\Channel\ECloud\Chatroom\Request\GetChatroomMemberInfoRequest;
use Webot\Channel\ECloud\Chatroom\Request\GetChatroomMemberRequest;
use Webot\Channel\ECloud\Chatroom\Response\GetChatroomMemberInfoResponse;
use Webot\Channel\ECloud\Chatroom\Response\GetChatroomMemberResponse;
use Webot\Channel\ECloud\Friend\Request\AddFriendRequest;
use Webot\Channel\ECloud\Friend\Request\CheckFriendStatusRequest;
use Webot\Channel\ECloud\Friend\Request\SearchFriendRequest;
use Webot\Channel\ECloud\Friend\Response\CheckFriendStatusResponse;
use Webot\Channel\ECloud\Friend\Response\SearchFriendResponse;
use Webot\Channel\ECloud\Login\Request\AddressListRequest;
use Webot\Channel\ECloud\Login\Request\ContactRequest;
use Webot\Channel\ECloud\Login\Request\InitAddressListRequest;
use Webot\Channel\ECloud\Login\Request\LoginECloudRequest;
use Webot\Channel\ECloud\Login\Request\LoginWechatQrRequest;
use Webot\Channel\ECloud\Login\Request\LoginWechatRequest;
use Webot\Channel\ECloud\Login\Response\ContactResponse;
use Webot\Channel\ECloud\Message\Request\DownloadEmojiRequest;
use Webot\Channel\ECloud\Message\Request\DownloadFileRequest;
use Webot\Channel\ECloud\Message\Request\DownloadImageRequest;
use Webot\Channel\ECloud\Message\Request\DownloadVideoRequest;
use Webot\Channel\ECloud\Message\Request\DownloadVideoResRequest;
use Webot\Channel\ECloud\Message\Request\DownloadVoiceRequest;
use Webot\Channel\ECloud\Message\Request\SendAppletsRequest;
use Webot\Channel\ECloud\Message\Request\SendAtTextRequest;
use Webot\Channel\ECloud\Message\Request\SendFileRequest;
use Webot\Channel\ECloud\Message\Request\SendImageRequest;
use Webot\Channel\ECloud\Message\Request\SendNameCardRequest;
use Webot\Channel\ECloud\Message\Request\SendRecvFileRequest;
use Webot\Channel\ECloud\Message\Request\SendRecvImageRequest;
use Webot\Channel\ECloud\Message\Request\SendTextRequest;
use Webot\Channel\ECloud\Message\Request\SendUrlRequest;
use Webot\Channel\ECloud\Message\Request\SetNotifyUrlRequest;
use Webot\Channel\ECloud\Message\Request\UnSetNotifyUrlRequest;
use Webot\Channel\ECloud\Util\Request\GetApiFlowRequest;
use Webot\Channel\ECloud\Util\Request\GetApiTimesRequest;
use Webot\Channel\ECloud\Util\Response\GetApiFlowResponse;
use Webot\Channel\ECloud\Util\Response\GetApiTimesResponse;
use Webot\Factory;

class ECloudTest extends TestCase
{
    protected $authorization = 'eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIxODcwNTgyMDI4NiIsInBhc3N3b3JkIjoiJDJhJDEwJDE4WHdyYzB1UURCcmpWdUFQWHBPdk9NaGR5Tjc1MFRtU2RJMGNXbFFzRGx6eWcyYk1uVHhhIn0.-W42LIVjzfTu7z7-cH0SQ5o-SoUP0xUUy3hiTcGkrBcG6B9z89qeCy2rwNhNja3IqqLe-1ov5aZugrnklJrIdQ';
    public function testECloud()
    {
        //1、登陆
        //$this->login();
        //2、消息
        //$this->send();
        //3、群
        $this->chatroom();
        //4、账户
        //$this->account();
        //5、好友
        //$this->friend();
        //6、特殊权限
        //$this->util();
    }

    protected function send()
    {
        $request = new SendAtTextRequest();
        $response = $request->setAuthorization($this->authorization)
            ->setWId('0bc5d96d-5855-432c-9eb8-a698277e2a2b')
            ->setWcId('43512229329@chatroom')
            ->setContent('@彭开怀 okk')
            ->setAt('25984983978910644@openim')
            ->request($this->app());
//        $request = new SendFileRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setWcId('43353608733@chatroom')
//            ->setFileName('dispatch_robot_qr_image.png')
//            ->setPath('https://kz-fe.oss-cn-hangzhou.aliyuncs.com/static/dgj/img/dispatch_robot_qr_image.png')
//            ->request($this->app());
//        $request = new SendImageRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setWcId('43353608733@chatroom')
//            ->setContent('https://kz-fe.oss-cn-hangzhou.aliyuncs.com/static/dgj/img/dispatch_robot_qr_image.png')
//            ->request($this->app());
//        $request = new SendUrlRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setWcId('43353608733@chatroom')
//            ->setDescription('test')
//            ->setTitle('url')
//            ->setUrl('http://www.baidu.com')
//            ->setThumbUrl('http://himg.bdimg.com/sys/portraitn/item/public.1.79a7f8e4.e6GyGEu9Lyf5Rsn6lmEzZg')
//            ->request($this->app());
//        $request = new SendNameCardRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setWcId('43353608733@chatroom')
//            ->setNameCardId('fcg_520')
//            ->request($this->app());
//        $request = new SendAppletsRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setWcId('43353608733@chatroom')
//            ->setDisplayName('快准E站')
//            ->setIconUrl('http://himg.bdimg.com/sys/portraitn/item/public.1.79a7f8e4.e6GyGEu9Lyf5Rsn6lmEzZg')
//            ->setAppId('wxeffb75faad905bf0')
//            ->setPagePath('https://mp.weixin.qq.com/mp/waerrpage?appid=wxeffb75faad905bf0&type=upgrade&upgradetype=3#wechat_redirect')
//            ->setThumbUrl('http://himg.bdimg.com/sys/portraitn/item/public.1.79a7f8e4.e6GyGEu9Lyf5Rsn6lmEzZg')
//            ->setTitle('LFMAM42AB70009378')
//            ->setUserName('gh_ac7522930df4@app')
//            ->request($this->app());
//        $request = new SendRecvFileRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setWcId('43353608733@chatroom')
//            ->setContent($this->fileXml)
//            ->request($this->app());
//        $request = new SendRecvImageRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setWcId('43353608733@chatroom')
//            ->setContent($this->imgXml)
//            ->request($this->app());
//        var_dump($response->getType(),$response->getWcId(), $response->getNewMsgId(), $response->getCreateTime());
//        $request = new SetNotifyUrlRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setHttpUrl('http://robot-staging.kzmall.cc/notify/ey')
//            ->setType(2)
//            ->request($this->app());
//        $request = new UnSetNotifyUrlRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->request($this->app());
//        $request = new DownloadFileRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setMsgId('1701182577')
//            ->setContent(<<<s
/*<?xml version="1.0"?><msg>\n\t<appmsg appid="wx6618f1cfc6c132f8" sdkver="0">\n\t\t<title>dispatch_robot_qr_image.png</title>\n\t\t<type>6</type>\n\t\t<action>view</action>\n\t\t<appattach>\n\t\t\t<totallen>347750</totallen>\n\t\t\t<fileext>png</fileext>\n\t\t\t<attachid>@cdn_3052020100044b3049020100020466e12e6e02033d14ba0204f739949d020467a470b0042466323966626661652d626165332d343435342d623837362d6330323037623961663930330204012800050201000400f2fdd11b_6b756875746361737270786f7a66636e_1</attachid>\n\t\t\t<cdnattachurl>3052020100044b3049020100020466e12e6e02033d14ba0204f739949d020467a470b0042466323966626661652d626165332d343435342d623837362d6330323037623961663930330204012800050201000400f2fdd11b</cdnattachurl>\n\t\t\t<cdnthumbaeskey />\n\t\t\t<aeskey>6b756875746361737270786f7a66636e</aeskey>\n\t\t\t<encryver>0</encryver>\n\t\t\t<filekey>43353608733@chatroom_5444_1738916062</filekey>\n\t\t\t<overwrite_newmsgid>1387431152287502539</overwrite_newmsgid>\n\t\t\t<fileuploadtoken>v1_gtnZWnOYHoX6RkGPlbQztIXbAMnsvP68K9NsOGw8fyv3BLWun8LbgqR268cbjSVpiGom7acf69Rdid3hPWhDwI2lTK6vvRbsuQRsKWKLBt5NkqleANfpu+o/MSKiYlBunsnUB1Qm8nKiqxhBqxiQQ3E6rbWTTGxKLLohQ05tEtkftnppD6XvJGrrtZfwXbD361pKokPcp41ZchaW74VhLyBjDSmzuZ2vd24=</fileuploadtoken>\n\t\t</appattach>\n\t\t<md5>98402e0a1882ff54071692e02c4d708e</md5>\n\t</appmsg>\n\t<fromusername>fcg_520</fromusername>\n\t<scene>0</scene>\n\t<appinfo>\n\t\t<version>7</version>\n\t\t<appname>微信电脑版</appname>\n\t</appinfo>\n\t<commenturl />\n</msg>*/
//s
//            )->request($this->app());
//        $request = new DownloadVoiceRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setMsgId('900714896')
//            ->setLength(5170)
//            ->setBufId('0')
//            ->setFromUser('fcg_520')
//            ->request($this->app());
//        $request = new DownloadImageRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setMsgId(280865761)
//            ->setType(0)
//            ->setContent(<<<s
/*<?xml version="1.0"?><msg><img aeskey="c323cf80b91feef16bfb6e168a118abe" encryver="1" cdnthumbaeskey="c323cf80b91feef16bfb6e168a118abe" cdnthumburl="3057020100044b3049020100020470c3e24602032f578902040e2983b7020467a57552042434336234313430342d366364302d343366302d626461362d623262316538333735616537020401250a020201000405004c51e500" cdnthumblength="4352" cdnthumbheight="119" cdnthumbwidth="120" cdnmidheight="0" cdnmidwidth="0" cdnhdheight="0" cdnhdwidth="0" cdnmidimgurl="3057020100044b3049020100020470c3e24602032f578902040e2983b7020467a57552042434336234313430342d366364302d343366302d626461362d623262316538333735616537020401250a020201000405004c51e500" length="33682" md5="961370e25f79f1dc969ddb8be9c22e5f" hevc_mid_size="33682" originsourcemd5="bdb3005407d57220dbe022de48c3016a"><secHashInfoBase64>eyJwaGFzaCI6IjUwMDAwMDEwMDAwMDAwMDAiLCJwZHFoYXNoIjoiNWU3NmM5MzJiMzM0NmM2NjBjYjEzOTZmZTVlOTI3OGM5MGU0NGU5YTczOTFkMzE2NWNjY2NjZTE5MzM5MjVlNSJ9</secHashInfoBase64><live><duration>0</duration><size>0</size><md5 /><fileid /><hdsize>0</hdsize><hdmd5 /><hdfileid /></live></img><platform_signature /><imgdatahash /><ImgSourceInfo><ImgSourceUrl /><BizType>0</BizType></ImgSourceInfo></msg>*/
//s
//        )->request($this->app());
//        $request = new DownloadEmojiRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setMsgId('183052995')
//            ->setContent(<<<s
//<msg><emoji fromusername="fcg_520" tousername="43353608733@chatroom" type="1" idbuffer="media:0_0" md5="3a8e16d650f7e66ba5516b2780512830" len="8413" productid="" androidmd5="3a8e16d650f7e66ba5516b2780512830" androidlen="8413" s60v3md5="3a8e16d650f7e66ba5516b2780512830" s60v3len="8413" s60v5md5="3a8e16d650f7e66ba5516b2780512830" s60v5len="8413" cdnurl="http://wxapp.tc.qq.com/262/20304/stodownload?m=3a8e16d650f7e66ba5516b2780512830&amp;filekey=30340201010420301e020201060402534804103a8e16d650f7e66ba5516b2780512830020220dd040d00000004627466730000000132&amp;hy=SH&amp;storeid=2630a10510002e20e000000000000010600004f5053481c267b40b711b08aa&amp;bizid=1023" designerid="" thumburl="" encrypturl="http://wxapp.tc.qq.com/262/20304/stodownload?m=c484596f8cbc0891378860ca8bb3211a&amp;filekey=30340201010420301e02020106040253480410c484596f8cbc0891378860ca8bb3211a020220e0040d00000004627466730000000132&amp;hy=SH&amp;storeid=2630a105100057a99000000000000010600004f5053481c067b40b711b201b&amp;bizid=1023" aeskey="6f256e4c83981e4de107a65fc73fdebe" externurl="http://wxapp.tc.qq.com/262/20304/stodownload?m=ffd4ffee65c8379a55bfef8c485a2ad7&amp;filekey=30340201010420301e02020106040253480410ffd4ffee65c8379a55bfef8c485a2ad702020950040d00000004627466730000000132&amp;hy=SH&amp;storeid=2630a10510008220b000000000000010600004f5053482c067b40b7116cc8c&amp;bizid=1023" externmd5="2bc127fc7e917d434a6e38a34b63ef91" width="100" height="100" tpurl="" tpauthkey="" attachedtext="" attachedtextcolor="" lensid="" emojiattr="" linkid="" desc=""></emoji><gameext type="2" content="8"></gameext></msg>
//s
//        )->request($this->app());
//        $request = new DownloadVideoRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->setMsgId('1605766424')
//            ->setContent(<<<s
/*<?xml version="1.0"?>\n<msg>\n\t<videomsg aeskey="a6f5b69931e8ddeb098f84988a1e8292" cdnvideourl="3057020100044b3049020100020470c3e24602032f57890204502783b7020467a5d311042432666366653838372d396435612d343162392d386134622d3762353066663063393632300204012808040201000405004c56f900" cdnthumbaeskey="a6f5b69931e8ddeb098f84988a1e8292" cdnthumburl="3057020100044b3049020100020470c3e24602032f57890204502783b7020467a5d311042432666366653838372d396435612d343162392d386134622d3762353066663063393632300204012808040201000405004c56f900" length="381796" playlength="3" cdnthumblength="5049" cdnthumbwidth="224" cdnthumbheight="398" fromusername="fcg_520" md5="5546906d510c5ffe7b337b31c80a0974" newmd5="7d6dcf9f0759b9013d9ff032ff555591" isplaceholder="0" rawmd5="" rawlength="0" cdnrawvideourl="" cdnrawvideoaeskey="" overwritenewmsgid="0" originsourcemd5="" isad="0" />\n</msg>\n*/
//s
//            )
//            ->request($this->app());

//        $request = new DownloadVideoResRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setId('bbb1cb77-57ce-4097-9aa5-40cb82543c03')
//            ->request($this->app());
//        var_dump($response->getId(),$response->getUrl(),$response->getType(),$response->getDes());


    }
    protected function login()
    {
        //登陆第一步
        $request = new LoginECloudRequest();
        $response = $request->setAccount('18705820286')
            ->setPassword('kz@123456')
            ->request($this->app());
        var_dump($response->getAuthorization(), $response->getCallbackUrl(), $response->getStatus());
        //登陆第二步
        $request = new LoginWechatQrRequest();
        $response = $request->setAuthorization($this->authorization)
            ->setWcId('wxid_azgl10oxla8r22')
            ->setProxy(8)
            ->request($this->app());
        var_dump($response->getWId(), $response->getQrCodeUrl(), $response->getUrl());
        //登陆第三步
        $request = new LoginWechatRequest();
        $response = $request->setAuthorization($this->authorization)
            ->setWId('da28992e-9ca6-435f-8f90-7541f12d77bf')
            ->request($this->app());
        var_dump($response->getWId(), $response->getDeviceType(), $response->getUin(), $response->getWcId(), $response->getWAccount(), $response->getNickName(),
            $response->getUsername(), $response->getSignature(), $response->getHeadUrl(), $response->getSmallHeadImgUrl(), $response->getMobilePhone(), $response->getCountry(), $response->getCity(), $response->getStatus());
        //初始化通讯录、获取通讯录
        $request = new InitAddressListRequest();
        $request->setAuthorization($this->authorization)->setWId('da28992e-9ca6-435f-8f90-7541f12d77bf')->request($this->app());
        $request = new AddressListRequest();
        $response = $request->setAuthorization($this->authorization)->setWId('da28992e-9ca6-435f-8f90-7541f12d77bf')->request($this->app());
        var_dump($response->getFriends(),$response->getChatrooms(), $response->getGhs(), $response->getOthers());
        //获取联系人信息
        $request = new ContactRequest();
        $contactList = $request->setAuthorization($this->authorization)
            ->setWId('da28992e-9ca6-435f-8f90-7541f12d77bf')
            ->setWcId('wxid_azgl10oxla8r22')->request($this->app());
        /** @var ContactResponse $response */
        foreach ($contactList as $response) {
            var_dump($response->getUserName(),$response->getNickName(),$response->getSignature(),$response->getBigHead(),$response->getSmallHead(),$response->getSex(),$response->getCountry(),$response->getPyInitial());
        }

        //var_dump($response->toJson());
    }
    protected function account()
    {
        $request = new QueryLoginWechatRequest();
        $wechatList = $request->setAuthorization($this->authorization)
            ->request($this->app());
        /** @var CheckAuthCountResponse $response */
        foreach ($wechatList as $response) {
            var_dump($response->getWId(), $response->getWcId());
        }
//        $request = new QueryIsOnlineWechatRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('27863af5-8994-4460-9c83-af97dc66b431')
//            ->request($this->app());var_dump($response->getIsOnline());
//        $request = new LogoutWechatRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setAccount('18705820286')
//            ->setWcIds(['wxid_0pknnbltqngw12'])
//            ->request($this->app());var_dump($response);


    }
    protected function chatroom()
    {
        $request = new GetChatroomInfoRequest();
        $response = $request->setAuthorization($this->authorization)
            ->setWId('0bc5d96d-5855-432c-9eb8-a698277e2a2b')
            ->setChatRoomId('43512229329@chatroom')
            ->request($this->app());
        var_dump($response->getChatRoomId(),$response->getNickName(),$response->getChatRoomOwner(),$response->getBigHeadImgUrl(),$response->getSmallHeadImgUrl(),$response->getMemberCount(),$response->getV1(),$response->getMemberCount(),$response->getChatRoomMembers());
//        $request = new GetChatroomMemberRequest();
//        $members = $request->setAuthorization($this->authorization)
//            ->setWId('fa3d7247-76ed-4f00-9e67-3a9a10f438c2')
//            ->setChatRoomId('43353608733@chatroom')
//            ->request($this->app());
//        /** @var GetChatroomMemberResponse $member */
//        foreach ($members as $member) {
//            var_dump($member->getChatRoomId(),$member->getUserName(),$member->getNickName(),$member->getSmallHeadImgUrl(),$member->getBigHeadImgUrl(),$member->getInviterUserName(),$member->getIsManage());
//        }
//        $request = new GetChatroomMemberInfoRequest();
//        $memberInfos = $request->setAuthorization($this->authorization)
//            ->setWId('9e14c5d3-e4c9-4034-a057-e1202d1afaea')
//            ->setChatRoomId('43512229329@chatroom')
//            ->setUserList('25984983978910644@openim')
//            ->request($this->app());
//        /** @var GetChatroomMemberInfoResponse $memberInfo */
//        foreach ($memberInfos as $memberInfo) {
//            var_dump($memberInfo->getUserName(),$memberInfo->getNickName(),$memberInfo->getRemark(),$memberInfo->getSignature(),$memberInfo->getSex(),$memberInfo->getCountry(),$memberInfo->getProvince(),$memberInfo->getCity(),$memberInfo->getBigHead(),$memberInfo->getSmallHead(),$memberInfo->getV1(),$memberInfo->getV2());
//        }

//        $request = new AgreeChatroomInviteRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('fa3d7247-76ed-4f00-9e67-3a9a10f438c2')
//            ->setUrl('https://support.weixin.qq.com/cgi-bin/mmsupport-bin/addchatroombyinvite?ticket=AToGerLb/F3A/b6h8fw/lQ==')
//            ->request($this->app());
//        var_dump($response);

    }
    protected function friend()
    {
//        $request = new SearchFriendRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('fa3d7247-76ed-4f00-9e67-3a9a10f438c2')
//            ->setWcId('JON88886666')
//            ->request($this->app());
//        var_dump($response->getUserName(),$response->getNickName(),$response->getSex(),$response->getBigHead(),$response->getSmallHead(),$response->getV1(),$response->getV2());
//        $request = new AddFriendRequest();
//        $response = $request->setAuthorization($this->authorization)
//            ->setWId('fa3d7247-76ed-4f00-9e67-3a9a10f438c2')
//            ->setV1('v3_020b3826fd03010000000000f3f12a6ca626c6000000501ea9a3dba12f95f6b60a0536a1adb68ece6a36c07ba5abddf6c3b58717539e2b691395304976789063b8d2936a62b31b68654289a999f9867b75e67b914070e77e68232f417bad751445140a@stranger')
//            ->setV2('v4_000b708f0b040000010000000000343c7fd46945351817834de7aa671000000050ded0b020927e3c97896a09d47e6e9e1abe3f37df05106a23e6898b2358b75bcaf3953592eb780555c916d919fcd26f32ac965883a3bfc24c3d7b09b64e8ff0eaf8e8836e6c5cfffa3f6534b869e51b541f890f9fee7ea54db6f46a56e9d0b93d727686ede74bd187@stranger')
//            ->setType($request::TYPE_MOBILE)
//            ->setVerify('测试添加好友，你不要同意知道不')
//            ->request($this->app());
//        var_dump($response);
        $request = new CheckFriendStatusRequest();
        $friends = $request->setAuthorization($this->authorization)
            ->setWId('fa3d7247-76ed-4f00-9e67-3a9a10f438c2')
            ->setWcId('fcg_520,JON88886666')
            ->request($this->app());
        /** @var CheckFriendStatusResponse $friend */
        foreach ($friends as $friend) {
            var_dump($friend->getUserName(),$friend->getStatus());
        }

    }
    protected function util()
    {
//        $request = new GetApiTimesRequest();
//        $list = $request->setAuthorization($this->authorization)
//            ->request($this->app());
//        /** @var GetApiTimesResponse $item */
//        foreach ($list as $item) {
//            echo $item->getAccount().'>'.$item->getNickName().'>'.$item->getWcId().'>'.$item->getTimes().'>'.$item->getWid()."\r\n";
//        }
        $request = new GetApiFlowRequest();
        $list = $request->setAuthorization($this->authorization)
            ->request($this->app());
        /** @var GetApiFlowResponse $item */
        foreach ($list as $item) {
            echo $item->getAccount().'>'.$item->getNickName().'>'.$item->getWcId().'>'.$item->getFlow().'>'.$item->getSize().'>'.$item->getWid()."\r\n";
        }
    }

    protected function app()
    {
        $config = [
            'name' => 'ECloud',
            'baseUrl' => 'http://10.80.21.101:8081',
            'timeout' => 5,
            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/robot_'.date('Ymd').'.log',
            ],
        ];
        return Factory::ECloud($config);
    }

    protected $fileXml = <<<s
<?xml version="1.0"?><msg><appmsg appid="wx6618f1cfc6c132f8" sdkver="0">
<title>dispatch_robot_qr_image.png</title><type>6</type><action>view</action><appattach><totallen>347750</totallen>
<fileext>png</fileext><attachid>@cdn_3052020100044b3049020100020466e12e6e02033d14ba0204f739949d020467a470b0042466323966626661652d626165332d343435342d623837362d6330323037623961663930330204012800050201000400f2fdd11b_6b756875746361737270786f7a66636e_1</attachid>
<cdnattachurl>3052020100044b3049020100020466e12e6e02033d14ba0204f739949d020467a470b0042466323966626661652d626165332d343435342d623837362d6330323037623961663930330204012800050201000400f2fdd11b</cdnattachurl>
<cdnthumbaeskey /><aeskey>6b756875746361737270786f7a66636e</aeskey><encryver>0</encryver><filekey>43353608733@chatroom_5414_1738895973</filekey>
<overwrite_newmsgid>3661199311224311599</overwrite_newmsgid><fileuploadtoken>v1_UdwMJme07IfuHfKNcU9nwiwD5cyB5/mcMXqKzF3usla+fBQsei1Ip4RvK2E6hqpvDgc2TrAwC37Ubk7MPxYnnTWNEnmHqepsR+RUzrNtqVcpaXc85JvZU545BOdPU8Bl8K2LFisXjGVCiky4c9yGYqUqVoULg9umcNfKfxX6naQKGM1N9Lb8c1ekPZl/dDYZDiPw0LD9PRTWGneJF18QoGDDLl1MdYprgKY=</fileuploadtoken></appattach>
<md5>98402e0a1882ff54071692e02c4d708e</md5></appmsg><fromusername>fcg_520</fromusername><scene>0</scene><appinfo><version>7</version>
<appname>微信电脑版</appname></appinfo><commenturl /></msg>
s;
    protected $imgXml = <<<s
<?xml version="1.0"?><msg>
<img aeskey="c323cf80b91feef16bfb6e168a118abe" encryver="1" cdnthumbaeskey="c323cf80b91feef16bfb6e168a118abe" cdnthumburl="3057020100044b3049020100020470c3e24602032f578902040e2983b7020467a57552042434336234313430342d366364302d343366302d626461362d623262316538333735616537020401250a020201000405004c51e500" cdnthumblength="4352" cdnthumbheight="119" cdnthumbwidth="120" cdnmidheight="0" cdnmidwidth="0" cdnhdheight="0" cdnhdwidth="0" cdnmidimgurl="3057020100044b3049020100020470c3e24602032f578902040e2983b7020467a57552042434336234313430342d366364302d343366302d626461362d623262316538333735616537020401250a020201000405004c51e500" length="33682" md5="961370e25f79f1dc969ddb8be9c22e5f" hevc_mid_size="33682" originsourcemd5="bdb3005407d57220dbe022de48c3016a">
<secHashInfoBase64>eyJwaGFzaCI6IjUwMDAwMDEwMDAwMDAwMDAiLCJwZHFoYXNoIjoiNWU3NmM5MzJiMzM0NmM2NjBjYjEzOTZmZTVlOTI3OGM5MGU0NGU5YTczOTFkMzE2NWNjY2NjZTE5MzM5MjVlNSJ9</secHashInfoBase64>
<live><duration>0</duration><size>0</size><md5 /><fileid /><hdsize>0</hdsize><hdmd5 /><hdfileid /></live></img>
<platform_signature /><imgdatahash /><ImgSourceInfo><ImgSourceUrl /><BizType>0</BizType></ImgSourceInfo></msg>
s;


}