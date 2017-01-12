<?php

/**
 * The main Paragraphs Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Paragraphs extends Ipsum
{
    /**
     * Constructor of Paragraphs
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
     * create properly formatted Paragraphs
     *
     * @return string
     */
    public function generate() : string
    {
        return $this->getMethodByLength('createSentence');
    }
}
