<?php

namespace Sven\Heap\Tests;

class HeapTest extends PackageTest
{
    /** @test */
    public function it_instantiates_a_new_heap()
    {
        $heap = $this->makeHeap();

        $this->assertEquals([], $heap->all());
    }

    /** @test */
    public function it_adds_items_to_heap_when_initialized()
    {
        $heap = $this->makeHeap(['foo', 'bar']);

        $this->assertEquals(['foo', 'bar'], $heap->all());
    }

    /** @test */
    public function it_gets_the_first_item()
    {
        $heap = $this->makeHeap(['foo', 'bar', 'baz']);

        $this->assertEquals('foo', $heap->first());
    }

    /** @test */
    public function it_only_gets_the_first_item_if_1_is_passed()
    {
        $heap = $this->makeHeap(['foo', 'bar', 'baz']);

        $this->assertEquals('foo', $heap->first(1));
    }

    /** @test */
    public function it_gets_the_first_2_items()
    {
        $heap = $this->makeHeap(['foo', 'bar', 'baz']);

        $this->assertEquals(['foo', 'bar'], $heap->first(2));
    }

    /** @test */
    public function it_gets_the_last_item()
    {
        $heap = $this->makeHeap(['foo', 'bar', 'baz']);

        $this->assertEquals('baz', $heap->last());
    }

    /** @test */
    public function it_only_gets_the_last_item_if_1_is_passed()
    {
        $heap = $this->makeHeap(['foo', 'bar', 'baz']);

        $this->assertEquals('baz', $heap->last(1));
    }

    /** @test */
    public function it_gets_the_last_2_items()
    {
        $heap = $this->makeHeap(['foo', 'bar', 'baz']);

        $this->assertEquals(['bar', 'baz'], $heap->last(2));
    }

    /** @test */
    public function it_can_push_to_the_items()
    {
        $heap = $this->makeHeap(['foo', 'bar']);

        $pushed = $heap->push('baz')->all();

        $this->assertEquals(['foo', 'bar', 'baz'], $pushed);
    }

    /** @test */
    public function it_can_merge_an_array_into_items()
    {
        $heap = $this->makeHeap(['foo', 'bar']);

        $merged = $heap->merge(['baz', 'fizz']);

        $this->assertEquals(['foo', 'bar', 'baz', 'fizz'], $merged->all());
    }

    /** @test */
    public function it_removes_all_items_from_a_heap()
    {
        $heap = $this->makeHeap(['foo', 'bar']);

        $nuked = $heap->nuke();

        $this->assertEquals([], $nuked->all());
    }

    /** @test */
    public function it_prepends_an_item()
    {
        $heap = $this->makeHeap(['bar', 'baz']);

        $prepended = $heap->prepend('foo');

        $this->assertEquals(['foo', 'bar', 'baz'], $prepended->all());
    }

    /** @test */
    public function it_appends_an_item()
    {
        $heap = $this->makeHeap(['foo', 'bar']);

        $appended = $heap->append('baz');

        $this->assertEquals(['foo', 'bar', 'baz'], $appended->all());
    }

    /** @test */
    public function it_returns_a_random_item()
    {
        $heap = $this->makeHeap(['foo', 'bar', 'baz']);

        $random = $heap->random();

        $this->assertTrue( in_array( $random, $heap->all() ) );
    }

    /**
     * Create a new Heap.
     *
     * @param  array  $items
     * @return \Sven\Heap\Heap
     */
    private function makeHeap(array $items = [])
    {
        return new \Sven\Heap\Heap($items);
    }
}