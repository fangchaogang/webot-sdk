<?php
namespace Webot\Channel\YCloud\Account\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class CheckAuthCountResponse
 * @package Webot\Channel\YCloud\Account\Response
 * @method getLicenseCount()
 * @method getDeviceType()
 */
class CheckAuthCountResponse extends Collection
{

    /**
     * 返回参数说明：
     *
     *
     * getLicenseCount()
     * 可登录机器⼈的数量
     *
     * getDeviceType()
     * Key为系统定义的平台类型，Value为对应的权限数量
     *
     *
     */

    /**
    * 返回案例：
    *
      {
      "deviceType": {
          "1": 1,
          "11": 0,
          "12": 0
      },
      "msg": "OK",
      "code": "0",
      "licenseCount": 1
      }
    */
}