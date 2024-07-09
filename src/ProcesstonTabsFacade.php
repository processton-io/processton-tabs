<?php

namespace Processton\ProcesstonTabs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonTabs\Skeleton\SkeletonClass
 */
class ProcesstonTabsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-tabs';
    }
}
