<?php
namespace Webot\Channel\YCloud\Login\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class CreateRobotResponse
 * @package Webot\Channel\YCloud\Login\Response
 * @method getMessageId()
 * @method getType()
 * @method getRobotKey()
 * @method getSiteCode()
 * @method getRobotBizType()
 */
class CreateRobotResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getMessageId()
     * 消息ID
     *
     * getType()
     *
     * getRobotKey()
     * 机器⼈密钥
     *
     * getSiteCode()
     *
     * getQrCode()
     * ⼆维码编码数据
     *
     * getRobotBizType()
     * 4表示微信机器⼈，5表示企微机器⼈
     *
     */

    public function getQrCode()
    {
        $qrCode = $this->get('qrCode');
        return str_replace("\r\n", "", $qrCode);
    }
}