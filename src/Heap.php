<?php

namespace Sven\Heap;

class Heap
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * Instantiate the Heap.
     *
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Show all items in the Heap.
     *
     * @return array
     */
    public function all()
    {
        return $this->items;
    }

    /**
     * Get the first item or a subset of items starting from the beginning.
     *
     * @param  integer $lookahead
     * @return array
     */
    public function first(int $lookahead = 0)
    {
        if ($lookahead <= 1) return $this->items[0];

        return array_slice($this->all(), 0, $lookahead);
    }

    /**
     * Get the last item or a subset of items starting from the end.
     *
     * @param  integer $lookbehind
     * @return array
     */
    public function last(int $lookbehind = 0)
    {
        if ($lookbehind <= 1) return end($this->items);

        return array_slice($this->all(), -$lookbehind, $lookbehind);
    }

    /**
     * Push an item into the Heap.
     *
     * @param  string $item
     * @return \Sven\Heap\Heap
     */
    public function push(string $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Merge another array into the Heap.
     *
     * @param  array  $items
     * @return \Sven\Heap\Heap
     */
    public function merge(array $items)
    {
        return $this->setItems(array_merge($this->items, $items));
    }

    /**
     * Push a value to be the first item in the Heap.
     *
     * @param  string $value
     * @return \Sven\Heap\Heap
     */
    public function prepend($value)
    {
        array_unshift($this->items, $value);

        return $this;
    }

    /**
     * Push a value to the last position in the Heap.
     *
     * @param  string $value
     * @return \Sven\Heap\Heap
     */
    public function append(string $value)
    {
        return $this->push($value);
    }

    /**
     * Return a random item from the Heap.
     *
     * @param  integer $amount
     * @return mixed
     */
    public function random()
    {
        return $this->items[array_rand($this->items)];
    }

    /**
     * Empties the entire Heap.
     *
     * @return \Sven\Heap\Heap
     */
    public function nuke()
    {
        return $this->setItems([]);
    }

    /**
     * Set the items to the given value.
     *
     * @param array $value
     */
    private function setItems(array $value)
    {
        $this->items = $value;

        return $this;
    }
}
