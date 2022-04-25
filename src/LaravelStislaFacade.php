<?php

namespace Bishwajitcadhikary\LaravelStisla;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bishwajitcadhikary\LaravelStisla\Skeleton\SkeletonClass
 */
class LaravelStislaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-stisla';
    }
}
