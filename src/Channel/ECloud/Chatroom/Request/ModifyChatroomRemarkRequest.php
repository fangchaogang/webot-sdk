<?php
namespace Webot\Channel\ECloud\Chatroom\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Request;

/**
 * 修改群备注
 * 修改群名备注后，如看到群备注未更改，是手机缓存问题，可以连续点击进入其他群，在点击进入修改的群，再返回即可看到修改后的群备注名，群名称的备注仅自己可见
 * Class ModifyChatroomName
 * @package Webot\Channel\ECloud\Chatroom\Request
 * @method $this setWId(string $wId)
 * @method $this setChatRoomId(string $chatRoomId)
 * @method $this setContent(string $content)
 */
class ModifyChatroomRemarkRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     * setChatRoomId(string $chatRoomId)
     * 必填：群号
     *
     * setContent(string $content)
     * 必填：需修改的群备注
     *
     */

    /**
     * @param Application $app
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app)
    {
        return $app->chatroom->modifyChatroomRemark($this);
    }

}