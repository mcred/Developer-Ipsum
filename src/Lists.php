<?php

/**
 * The main Lists Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Lists extends Ipsum
{
    /**
     * Constructor of Lists
     *
     * @param Assembler $assembler
     * @param int       $count
     * @param int       $length
     */
    public function __construct(Assembler $assembler, int $count, int $length)
    {
        parent::__construct($assembler, $count, $length);
    }
    
    /**
     * create properly formatted Lists
     *
     * @return string
     */
    public function generate() : string
    {
        return $this->getMethodByLength('getRandomWord');
    }
}
