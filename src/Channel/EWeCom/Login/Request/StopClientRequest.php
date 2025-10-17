<?php
namespace Webot\Channel\EWeCom\Login\Request;

use Webot\Channel\EWeCom\Application;

class StopClientRequest extends RestoreClientRequest
{
    public function request(Application $app)
    {
        return $app->login->stopClient($this);
    }
}