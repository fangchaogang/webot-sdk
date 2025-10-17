<?php
namespace Webot\Tests;

use Webot\Channel\EWeCom\Account\Request\GetWechatProfileRequest;
use Webot\Channel\EWeCom\Account\Request\LogoutWechatRequest;
use Webot\Channel\EWeCom\Account\Request\WechatStatusRequest;
use Webot\Channel\EWeCom\Chatroom\Request\GetChatroomListRequest;
use Webot\Channel\EWeCom\Login\Request\CreateClientRequest;
use Webot\Channel\EWeCom\Login\Request\LoginWechatQrCheckRequest;
use Webot\Channel\EWeCom\Login\Request\LoginWechatQrRequest;
use Webot\Channel\EWeCom\Login\Request\RestoreClientRequest;
use Webot\Channel\EWeCom\Message\Request\SendAtTextRequest;
use Webot\Channel\EWeCom\Message\Request\SendImageRequest;
use Webot\Channel\EWeCom\Message\Request\SendMixedTextRequest;
use Webot\Channel\EWeCom\Message\Request\SendTextRequest;
use Webot\Channel\EWeCom\Util\Request\DownloadFileRequest;
use Webot\Channel\EWeCom\Util\Request\UploadFileUrlRequest;
use Webot\Factory;

class EWeComTest extends TestCase
{

    protected $token = '38a56b4d-2b04-4fb5-bed1-dba3de1d4cbf';
    protected $guid = '04f2df85-7590-4edd-be63-9d9ecd139d34';
    public function testEWeCom()
    {
        //$this->login();
        //$this->account();
        //$this->message();
        //$this->util();
        $this->chatroom();
    }

    protected function chatroom()
    {
        $request = new GetChatroomListRequest();
        $response = $request->setToken($this->token)
            ->setGuid($this->guid)
            ->setRoomIdList(['10914782893824742'])
            ->setRelation(1)
            ->request($this->app());
        var_dump($response->toJson());
    }

    protected function login()
    {
        $this->loginLogic();
    }

    protected function account()
    {
        $request = new WechatStatusRequest();
        $response = $request->setToken($this->token)
            ->setGuid('04f2df85-7590-4edd-be63-9d9ecd139d34')
            ->request($this->app());
        var_dump($response->getUserId(),$response->getNickname(),$response->getCorpLogo(),$response->getCorpName(),$response->getUserOnlineStatus());

//        $request = new GetWechatProfileRequest();
//        $response = $request->setToken($this->token)
//            ->setGuid('04f2df85-7590-4edd-be63-9d9ecd139d34')
//            ->request($this->app());
//        var_dump(
//            $response->getAcctid(),$response->getAlias(),$response->getAvatarUrl(),$response->getCorpId(),$response->getGender(),$response->getGroupId(),$response->getInternationCode(),$response->getMobile(),$response->getNickname(),$response->getRealName(),$response->getUserId()
//        );
//        $request = new LogoutWechatRequest();
//        $response = $request->setToken($this->token)
//            ->setGuid('04f2df85-7590-4edd-be63-9d9ecd139d34')
//            ->request($this->app());
//        var_dump($response);
    }

    public function message()
    {
//        $request = new SendTextRequest();
//        $response = $request->setToken($this->token)
//            ->setGuid($this->guid)
//            ->setContent('文本消息' . rand(1,9))
//            ->setToId('10914782893824742')
//            ->request($this->app());
//        var_dump($response->getIsSendSuccess(),$response->getMsgServerId(),$response->getMsgUniqueIdentifier());

//        $request = new SendAtTextRequest();
//        $response = $request->setToken($this->token)
//            ->setGuid($this->guid)
//            ->setContent("\n".'文本消息')
//            ->setAtId('7881300895933215')
//            ->setToId('10914782893824742')
//            ->request($this->app());
//        var_dump($response->getIsSendSuccess(),$response->getMsgServerId(),$response->getMsgUniqueIdentifier());

//        $request = new SendMixedTextRequest();
//        $response = $request->setToken($this->token)
//            ->setGuid($this->guid)
//            ->setContent([['subtype' => 2, 'text' => '[微笑]']])
//            ->setToId('10914782893824742')
//            ->request($this->app());
//        var_dump($response->getIsSendSuccess(),$response->getMsgServerId(),$response->getMsgUniqueIdentifier());

        $request = new UploadFileUrlRequest();
        $response = $request->setToken($this->token)
            ->setGuid($this->guid)
            ->setFilename('092247480a0e8a3c7dddb276346a737f.jpg')
            ->setFileType($request::FILE_TYPE_JPG)
            ->setFileUrl('https://kz-wxapp-kzmall.oss-cn-hangzhou.aliyuncs.com/VinAudit/prod/goods_images/2022/11/11/092247480a0e8a3c7dddb276346a737f.jpg?x-oss-process=image/resize,w_400')
            ->request($this->app());
        $request = new SendImageRequest();
        $response = $request->setToken($this->token)
            ->setGuid($this->guid)
            ->setFilename('092247480a0e8a3c7dddb276346a737f.jpg')
            ->setFileAesKey($response->getFileAesKey())
            ->setFileId($response->getFileId())
            ->setFileKey($response->getFileKey())
            ->setFileMd5($response->getFileMd5())
            ->setFileSize($response->getFileSize())
            ->setToId('10914782893824742')
            ->request($this->app());
        var_dump($response->getIsSendSuccess(),$response->getMsgServerId(),$response->getMsgUniqueIdentifier());

    }

    protected function util()
    {
        $request = new DownloadFileRequest();
        $response = $request->setToken($this->token)
            ->setGuid($this->guid)
            ->setFileAeskey('871c573e69c48ef90ca2421dc5d00d98')
            ->setFileAuthkey('v1_14d0a373f9d76928c8ba05fc6197dc0cc8c980509c71d35827ff9db7fdd8ee25354b49776dee5de985dd8fbfe57bff33e416292a84942a87a4f64fe9222923fe6dc37d25eb63b46ef3879f9767748b34')
            ->setFileSize(305333)
            ->setFileType(1)
            ->setFileUrl('https://imunion.weixin.qq.com/cgi-bin/mmae-bin/tpdownloadmedia?param=v1_14d0a373f9d76928c8ba05fc6197dc0cc8c980509c71d35827ff9db7fdd8ee25354b49776dee5de985dd8fbfe57bff33034443b70a7a954587e25112f47d5613d873b687933c02ce0c902f8276c0abf68ff09180bb14fba822dd9b4e7e920790a22a4dfd983d0c7293cfa87d5d8b9fa0d30e534abad6a532a901d97a5c3fc28f842ca13d96a502575cd400579b4613936709bba327a685698cf6826d6d33e0deb600076553131cfa371807953867961939313a910a8719b92c2ffb276df6760e8e1536a3bc254d23e5467b06fd46285b5944fed53f8e321e4bbc4b2a92b774eb81afb3b64d25cfc756aabdfffc62777bcc2f1cbe9e6ff480def3fef99f9bbd29417694a628accb7403665b9c25cd0f34')
            ->request($this->app());
        var_dump($response->getCloudUrl());
    }
    protected function loginLogic()
    {
//        $request = new CreateClientRequest();
//        $response = $request->setToken($this->token)
//            ->setProxyUrl('')
//            ->setAreaCode(330000)
//            ->setDeviceName('9999的ipad')
//            ->setClientVersion('')
//            ->request($this->app());
//        $guid = $response->getGuid();
        $guid = '04f2df85-7590-4edd-be63-9d9ecd139d34';
//        $request = new RestoreClientRequest();
//        $response = $request->setToken($this->token)
//            ->setGuid($guid)
//            ->request($this->app());
//        var_dump($response);

//        $request = new LoginWechatQrRequest();
//        $response = $request->setGuid($guid)
//            ->setToken($this->token)
//            ->setUseCache(false)
//            ->request($this->app());
//        var_dump($response->getQrUrl());
        $bit = true;
        while ($bit) {
            $request = new LoginWechatQrCheckRequest();
            try {
                $response = $request->setToken($this->token)
                    ->setGuid($guid)
                    ->request($this->app());
                switch ($response->getLoginQrcodeStatus()) {
                    case -1: throw new \Exception('-1;未登陆，需要扫码登陆');
                    case 0: throw new \Exception('0;未登陆，可免扫码登陆');
                    case 1:throw new \Exception('1;已扫码，待确认');
                    case 2:break;
                    case 4:throw new \Exception('4;用户取消登陆');
                    case 10:throw new \Exception('10;已扫码确认，待检测6位验证码');
                }
                $bit = false;
                var_dump($response->toJson());
            } catch (\Throwable $exception) {
                var_dump($exception->getMessage());
                sleep(1);
            }
            sleep(1);
            var_dump('...');
        }
    }

    protected function app()
    {
        $config = [
            'name' => 'EWeCom',
            'baseUrl' => 'http://218.78.133.96:8123',
            'timeout' => 5,
            'verify' => false,
            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/robot_'.date('Ymd').'.log',
            ],
        ];
        return Factory::EWeCom($config);
    }

}