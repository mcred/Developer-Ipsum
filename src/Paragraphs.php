<?php

/**
 * The main Paragraphs Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Paragraphs extends Ipsum
{
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
