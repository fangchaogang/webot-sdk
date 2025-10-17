<?php
namespace Webot\Channel\EWeCom\Login\Request;

use Webot\Channel\EWeCom\Application;
use Webot\Channel\EWeCom\Request;

/**
 * 创建设备
 * Class CreateClientRequest
 * @package Webot\Channel\EWeCom\Login\Request
 * @method $this setProxyUrl(string $proxyUrl)
 * @method $this setAreaCode(int $areaCode)
 * @method $this setDeviceName(string $deviceName)
 * @method $this setDeviceType(int $deviceType = 0)
 * @method $this setClientVersion(string $clientVersion)
 */
class CreateClientRequest extends Request
{

    /**
     * 参数说明：
     *
     *
     * setProxyUrl(string $proxyUrl)
     * 必填：自定义代理；格式必须为: scheme://user:password@ip:port，如无验证直接写地址即可。目前只支持socks5. 如:socks5://root:123456@192.168.88.242:1080
     *
     * setAreaCode(int $areaCode)
     * 必填：代理地区；地区id对照表
     * 110000：北京市 | 120000：天津市 | 130000：河北省 | 140000：山西省 | 210000：辽宁省 |
     * 220000：吉林省 | 230000：黑龙江省 |310000：上海市 | 320000 ：江苏省 | 330000：浙江省 |
     * 340000：安徽省 | 350000：福建省 | 360000：江西省 | 370000：山东省 | 410000：河南省 |
     * 420000：湖北省 | 430000：湖南省 | 440000：广东省 | 450000：广西省 | 460000：海南省 |
     * 500000：重庆市 | 510000：四川省 | 520000：贵州省 | 530000：云南省 | 540000：西藏 |
     * 610000：陕西省 | 620000：甘肃省 | 630000：青海省 | 640000：宁夏 | 150000：内蒙古 |
     * 650000：新疆 |
     *
     * setDeviceName(string $deviceName)
     * 必填：设备名称
     *
     * setDeviceType(int $deviceType = 0)
     * 非必须，0-ipad, 2-windows, 3-macOS, 4-android, 5-iOS（目前支持ipad，windows）
     *
     * setClientVersion(string $clientVersion = '')
     * 如无特殊需求，置空即可
     *
     */

    /**
     * @param Application $app
     * @return \Webot\Channel\EWeCom\Login\Response\CreateClientResponse
     * @throws \Webot\Kernel\Exceptions\Exception
     */
    public function request(Application $app)
    {
        return $app->login->createClient($this);
    }
}