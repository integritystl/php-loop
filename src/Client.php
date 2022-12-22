<?php

namespace Integrity\ScribbleAI;

class Client extends \Integrity\Trolley\Client
{
    protected $controllers = [
        \Integrity\ScribbleAI\Controllers\BlogsController::class,
    ];
}
