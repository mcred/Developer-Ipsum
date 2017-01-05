<?php

/**
 * The main Ipsum class
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Ipsum
{
    /**
     * requested count of items
     *
     * @var int
     */
    protected $count;

    /**
     * requests length of items
     *
     * @var int
     */
    protected $length;

    /**
     * Constructor of Ipsum Class
     *
     * @param int $count
     * @param int $length
     */
    public function __construct(int $count, int $length)
    {
        $this->count = $count;
        $this->length = $length;

        $this->checkCount();
        $this->checkLength();
    }

    /**
     * Ensure that count is valid
     *
     * @throws Exception
     * @return void
     */
    private function checkCount() : void
    {
        if($this->count < 1){
            throw new InvalidArgumentException('Count must be 1 or greater.');
        }
    }

    /**
     * Encure that length is valid
     *
     * @throws Exception
     * @return void
     */
    private function checkLength() : void
    {
        if($this->length < 1){
            throw new InvalidArgumentException('Length must be 1 or greater.');
        }
    }
}
