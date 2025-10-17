<?php
namespace Webot\Channel\EWeCom;

use Webot\Kernel\Support\Collection;
use Webot\Kernel\Support\Str;

/**
 * Class Request
 * @package Webot\Channel\EWeCom
 * @method $this setToken($token)
 * @method getToken()
 */
class Request extends Collection
{
    protected $transform = false;

    protected $params = [];

    public function __call($name, $arguments)
    {
        $posGet = strpos($name, 'get');
        $posSet = strpos($name, 'set');
        $name = lcfirst(substr($name, 3));

        if ($posGet !== false && $posGet == 0)  {
            return $this->params[$this->transform ? Str::snake($name) : $name];
        } elseif ($posSet !== false && $posSet == 0) {
            $this->params[$this->transform ? Str::snake($name) : $name] = $arguments[0];
        }
        return $this;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}