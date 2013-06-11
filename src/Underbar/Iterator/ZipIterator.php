<?php

namespace Underbar\Iterator;

class ZipIterator extends \MultipleIterator
{
    private $index;

    public function __construct()
    {
        parent::__construct(self::MIT_NEED_ALL | self::MIT_KEYS_NUMERIC);
    }

    public function key()
    {
        return $this->index;
    }

    public function rewind()
    {
        parent::rewind();
        $this->index = 0;
    }

    public function next()
    {
        parent::next();
        $this->index++;
    }
}
