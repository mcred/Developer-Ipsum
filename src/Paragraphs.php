<?php

/**
 * The main Paragraphs Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Paragraphs extends Ipsum
{
    private $assembler;

    public function __construct(Assembler $assembler, int $count, int $length)
    {
        $this->assembler = $assembler;
        parent::__construct($count, $length);
    }

    private function getSentences() : string
    {
        $return = '';
        for ($i=0; $i < $this->length; $i++) {
            $return .= $this->assembler->createSentence() . ' ';
        }
        return $return;
    }

    private function getParagraphs() : string
    {
        $return = '';
        for ($i=0; $i < $this->count; $i++) {
            $return .= $this->getSentences() . PHP_EOL;
        }
        return $return;
    }

    public function generate() : string
    {
        return $this->getParagraphs();
    }
}
