<?php
namespace Webot\Channel\ECloud\Login\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class ContactResponse
 * @package Webot\Channel\ECloud\Login\Response
 * @method getUserName()
 * @method getNickName()
 * @method getSignature()
 * @method getBigHead()
 * @method getSmallHead()
 * @method getSex()
 * @method getCountry()
 * @method getPyInitial()
 */
class ContactResponse extends Collection
{
    /**
     * 参数说明：
     *
     *
     * getUserName() 微信id/微信号
     *
     * getNickName() 昵称
     *
     * getSignature() 签名
     *
     * getBigHead() 大头像
     *
     * getSmallHead() 小头像
     *
     * getSex() 性别
     *
     * getCountry() 国家
     *
     * getPyInitial() 昵称首字母
     *
     */
}