<?php

namespace Sven\Heap\Tests;

use Sven\Heap\Heap;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Set up the testing suite.
     */
    public function setUp()
    {
        $this->heap = new Heap;
    }

    /**
     * Create a new heap from the given items.
     *
     * @param  array  $items
     * @return \Sven\Heap\Heap
     */
    public function makeHeap(array $items)
    {
        return new Heap($items);
    }
}
