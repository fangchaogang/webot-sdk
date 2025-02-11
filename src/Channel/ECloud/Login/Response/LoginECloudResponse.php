<?php
namespace Webot\Channel\ECloud\Login\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class LoginECloudResponse
 * @package Webot\Channel\ECloud\Login\Response
 * @method getCallbackUrl()
 * @method getAuthorization()
 * @method getStatus()
 */
class LoginECloudResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getCallbackUrl()
     * 消息回调地址
     *
     * getAuthorization()
     * 授权密钥，生成后永久有效
     *
     * getStatus()
     * 状态（0：正常，1：冻结，2：到期）
     *
     */

    /**
     * LoginECloudResponse constructor.
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        foreach ($items as $key => $value) {
            $newKey = lcfirst($key);
            unset($items[$key]);
            $items[$newKey] = $value;
        }
        parent::__construct($items);
    }

    /**
     * 返回案例：
     *{
    "authorization": "eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiIxODcwNTgyMDI4NiIsInBhc3N3b3JkIjoiJDJhJDEwJDBqalExOW55ckJqdFlIZkJ4SUxGVmVzbUVKeWcucExZeXRoeDJiMlBSTVlkVU1sc0VhNldXIn0.pA_lot6tnoTw-AA9SvJ6lzyx3bAjBZASxNMfzbNbxP3HAHzSGdpULfe518Od3qjeHKptf7aejpAcFJOXKoi44A",
    "callbackUrl": "http://robot-scd.kzmall.cc/notify/ey",
    "status": 0
    }
     */
}