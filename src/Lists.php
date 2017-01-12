<?php

/**
 * The main Lists Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Lists extends Ipsum
{
    /**
     * Instance of Assembler class
     *
     * @var Assembler
     */
    private $assembler;

    /**
     * Constructor of Lists
     *
     * @param Assembler $assembler
     * @param int       $count
     * @param int       $length
     */
    public function __construct(Assembler $assembler, int $count, int $length)
    {
        $this->assembler = $assembler;
        parent::__construct($count, $length);
    }

    /**
     * get requested Length of formatted Words.
     *
     * @return string
     */
    private function getWords() : string
    {
        $return = '';
        for ($i=0; $i < $this->length; $i++) {
            $return .= $this->assembler->getRandomWord() . ', ';
        }
        return $return;
    }

    /**
     * get requested Count of formatted Lists.
     *
     * @return string
     */
    private function getLists() : string
    {
        $return = '';
        for ($i=0; $i < $this->count; $i++) {
            $return .= $this->getWords() . PHP_EOL;
        }
        return $return;
    }

    /**
     * create properly formatted Lists
     *
     * @return string
     */
    public function generate() : string
    {
        return $this->getLists();
    }
}
