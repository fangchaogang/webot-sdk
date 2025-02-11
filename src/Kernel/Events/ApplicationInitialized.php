<?php
namespace Webot\Kernel\Events;

use Webot\Kernel\ServiceContainer;

class ApplicationInitialized
{
    /**
     * @var \Webot\Kernel\ServiceContainer
     */
    public $app;

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
    }
}
