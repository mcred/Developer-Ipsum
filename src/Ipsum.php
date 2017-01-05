<?php

/**
 * The main Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Ipsum
{
    protected $count;
    protected $length;

    public function __construct(int $count, int $length)
    {
        $this->count = $count;
        $this->length = $length;

        $this->checkCount();
        $this->checkLength();
    }

    private function checkCount() : void
    {
        if($this->count < 1){
            throw new InvalidArgumentException('Count must be 1 or greater.');
        }
    }

    private function checkLength() : void
    {
        if($this->length < 1){
            throw new InvalidArgumentException('Length must be 1 or greater.');
        }
    }
}
