<?php

/**
 * The main Paragraphs Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Paragraphs extends Ipsum
{
    /**
     * Instance of Assembler class
     *
     * @var Assembler
     */
    private $assembler;

    /**
     * Constructor of Paragraphs
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
     * get requested Length of formatted Sentences.
     *
     * @return string
     */
    private function getSentences() : string
    {
        $return = '';
        for ($i=0; $i < $this->length; $i++) {
            $return .= $this->assembler->createSentence() . ' ';
        }
        return $return;
    }

    /**
     * get requested Count of formatted Paragraphs.
     *
     * @return string
     */
    private function getParagraphs() : string
    {
        $return = '';
        for ($i=0; $i < $this->count; $i++) {
            $return .= $this->getSentences() . PHP_EOL;
        }
        return $return;
    }

    /**
     * create properly formatted Paragraphs
     *
     * @return string
     */
    public function generate() : string
    {
        return $this->getParagraphs();
    }
}
