<?php

/**
 * The main Words Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Words extends Ipsum
{
    private $count;
    private $length;

    public function __construct(int $count, int $length)
    {
        $this->count = $count;
        $this->length = $length;
    }

    public function generate()
    {

    }
}
