<?php

namespace Sven\Heap\Tests;

use Sven\Heap\Heap;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class HeapTestCase extends AbstractPackageTestCase
{
    public function makeHeap(array $items = [])
    {
        return new Heap($items);
    }
}
