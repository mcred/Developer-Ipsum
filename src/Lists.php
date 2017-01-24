<?php

/**
 * The main Lists Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Lists extends Ipsum
{
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
