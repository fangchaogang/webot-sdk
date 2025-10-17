<?php
namespace Webot\Channel\EWeCom\Chatroom\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Request;
/**
 * 联系人详情-批量
 * Class GetContactListRequest
 * @package Webot\Channel\EWeCom\Message\Request
 * @method $this setGuid(string $guid)
 * @method $this setUserIdList(array $userIdList)
 */
class GetContactListRequest extends Request
{
    /**
     * @param Application $app
     * @return \Webot\Kernel\Support\Collection
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->chatroom->getContactList($this);
    }
}