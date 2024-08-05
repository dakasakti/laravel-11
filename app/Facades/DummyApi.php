<?php

namespace App\Facades;

use App\Services\DummyApi as Service;
use Illuminate\Support\Facades\Facade;

class DummyApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Service::class;
    }
}
