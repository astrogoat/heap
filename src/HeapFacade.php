<?php

namespace Astrogoat\Heap;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Heap\Heap
 */
class HeapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'heap';
    }
}
