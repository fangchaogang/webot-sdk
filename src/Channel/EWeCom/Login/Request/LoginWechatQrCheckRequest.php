<?php
namespace Webot\Channel\EWeCom\Login\Request;
use Webot\Channel\EWeCom\Application;

class LoginWechatQrCheckRequest extends RestoreClientRequest
{

    public function request(Application $app)
    {
        return $app->login->loginWechatQrCheck($this);
    }
}