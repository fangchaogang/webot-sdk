<?php
namespace Webot\Channel\YCloud\Login\Request;

use Webot\Channel\YCloud\Application;

class RemoveRobotRequest extends LoginWechatCheckRequest
{

    public function request(Application $app)
    {
        return $app->login->removeRobot($this);
    }
}