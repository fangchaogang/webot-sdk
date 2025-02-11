<?php
namespace Webot\Kernel\Contracts;

use ArrayAccess;

interface ArrayAble extends ArrayAccess
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array;
}
