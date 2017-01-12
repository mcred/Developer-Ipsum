<?php

/**
* @covers Lists
*/
class ListsTest extends \PHPUnit\Framework\TestCase
{
    private $assembler;
    private $vocab;

	public function setup()
	{
        $this->vocab = new VOCAB();
        $this->assembler = new Assembler(new Vocabulary($this->vocab));
	}

    public function testCanInstantiateLists()
    {
        $this->Lists = new Lists($this->assembler, 7, 3);
        $this->assertInstanceOf(Lists::class, $this->Lists);
    }

    public function testCanGenerate()
    {
        $this->Lists = new Lists($this->assembler, 1, 1);
        $this->Lists->generate();
    }
}
