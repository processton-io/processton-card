<?php

namespace Processton\ProcesstonCard;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonCard\Skeleton\SkeletonClass
 */
class ProcesstonCardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-card';
    }
}
