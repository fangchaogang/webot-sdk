<?php
namespace Webot\Channel\YCloud\Account\Response;

use Webot\Kernel\Support\Collection;
/**
 * Class RobotResponse
 * @package Webot\Channel\YCloud\Account\Response
 * @method getRobotKey()
 * @method getWxid()
 * @method getNickName()
 * @method getHeadImg()
 * @method getMobile()
 * @method getRobotStatus()
 * @method getLastLoginTime()
 * @method getCompanyId()
 * @method getCompanyName()
 * @method getClientCode()
 * @method getMasterClientCode()
 * @method getExpireDateStart()
 * @method getExpireDateEnd()
 *
 */
class RobotResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getRobotKey()
     * 机器人密钥
     *
     * getWxid()
     * 机器人微信ID
     *
     * getNickName()
     * 机器人昵称
     *
     * getHeadImg()
     * 机器人头像
     *
     * getMobile()
     * 机器人手机号
     *
     * getRobotStatus()
     * 0:初始化 1:在线 2:离线 3:封号禁⽌登录 4:被踢出登录
     *
     * getLastLoginTime()
     * 最后一次登陆时间
     *
     * getCompanyId()
     * 公司ID
     *
     * getCompanyName()
     * 公司名称
     *
     * getClientCode()
     * 机器⼈所属⽤户
     *
     * getMasterClientCode()
     * 机器⼈对应的主账号
     *
     * getExpireDateStart()
     * 有效开始时间
     *
     * getExpireDateEnd()
     * 有效结束时间
     *
     */

    const STATUS_INIT = 0;//初始化
    const STATUS_UP = 1; //在线
    const STATUS_DOWN = 2;//离线
    const STATUS_ERROR = 3;//封号
    const STATUS_CANCEL = 4;//踢出
    /**
     * 返回案例：
     *
     * {
     * "msg": "OK",
     * "code": "0",
     * "model": [
     * {
     * "headImg": "https://wework.qpic.cn/wwpic3az/301034_qF60xfk0Q2CxTLP_1753322826/0",
     * "loginType": "1",
     * "nickName": "方朝罡",
     * "companyName": "浙江快准车服网络科技有限公司",
     * "mobile": "18705820286",
     * "wxid": "1688854418340445",
     * "expireDateStart": "2025-09-12 00:00:00.0",
     * "lastLoginTime": "2025-09-14 14:38:25",
     * "companyId": 1970325083443705,
     * "robotKey": "8eae75ff5585449e88906cc4641b8616",
     * "robotStatus": 1,
     * "clientCode": "kzcf",
     * "masterClientCode": "kzcf",
     * "expireDateEnd": "2025-09-19 12:00:00.0",
     * "officialUserId": "fangcg",
     * "internalUserId": "fangcg"
     * }
     * ]
     * }
     */
}