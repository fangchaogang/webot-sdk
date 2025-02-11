<?php
namespace Webot\Channel\ECloud\Chatroom\Response;

use Webot\Kernel\Support\Collection;

/**
 * Class CreateChatroomResponse
 * @package Webot\Channel\ECloud\Chatroom\Response
 * @method getChatRoomID()
 * @method getBase64()
 * @method getStatus()
 */
class CreateChatroomResponse extends Collection
{
    /**
     * 返回参数说明：
     *
     *
     * getChatRoomID()
     * 群号
     *
     * getBase64()
     * 群二维码
     *
     * getStatus()
     * 状态 1正常
     *
     */

    /**
     * 返回案例：
     *{
    "chatRoomID": "22264491511@chatroom",
    "base64": "/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCACLAIsDASIAAhEBAxEB/8QAHwAAAQUBXXXXXXXXXbSac8Uif8ATeM5/Jq9Zoo/s+l3f4f5DeYVX0X4/wCZw/hrQdTstXtprixEUYZ97mRSQCrY6H1IruKKK7KVJUY8sThq1XWlzSR//9k=",
    "status": 1
    }
     */
}