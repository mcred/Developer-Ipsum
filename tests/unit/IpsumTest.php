<?php

/**
* @covers Ipsum
*/
class IpsumTest extends \PHPUnit\Framework\TestCase
{
    private $Ipsum;
    private $Assembler;
    private $vocab;

	public function setup()
	{
        $this->vocab = new VOCAB();
        $this->Assembler = new Assembler(new Vocabulary($this->vocab));
	}

    public function testCanInstantiateIpsum()
    {
        $this->Ipsum = new Ipsum($this->Assembler, 7, 3);
        $this->assertInstanceOf(Ipsum::class, $this->Ipsum);
    }

    public function testInvalidCount()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Count must be 1 or greater.');

        $this->Ipsum = new Ipsum($this->Assembler, 0,1);
    }

    public function testInvalidLength()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Length must be 1 or greater.');

        $this->Ipsum = new Ipsum($this->Assembler, 1,0);
    }
}
