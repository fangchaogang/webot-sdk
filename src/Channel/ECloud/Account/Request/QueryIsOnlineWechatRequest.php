<?php
namespace Webot\Channel\ECloud\Account\Request;

use Webot\Channel\ECloud\Application;
use Webot\Channel\ECloud\Account\Response\QueryIsOnlineWechatResponse;
use Webot\Channel\ECloud\Request;

/**
 * 查询微信是否在线
 * Class QueryIsOnlineWechatRequest
 * @package Webot\Channel\ECloud\Account\Request
 * @method $this setWId(string $wId)
 */
class QueryIsOnlineWechatRequest extends Request
{
    /**
     * 参数说明：
     *
     *
     * setWId(string $wId)
     * 必填：登录实例标识
     *
     */

    /**
     * @param Application $app
     * @return QueryIsOnlineWechatResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Webot\Kernel\Exceptions\Exception
     * @throws \Webot\Kernel\Exceptions\InvalidConfigException
     */
    public function request(Application $app): QueryIsOnlineWechatResponse
    {
        return $app->account->queryIsOnlineWechat($this);
    }
}