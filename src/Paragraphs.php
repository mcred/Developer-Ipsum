<?php

/**
 * The main Paragraphs Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Paragraphs extends Ipsum
{

    public function __construct(Assembler $assambler, int $count, int $length)
    {
        parent::__construct($count, $length);
    }

    public function generate()
    {

    }
}
