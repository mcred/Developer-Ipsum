<?php

/**
* @covers Ipsum
*/
class IpsumTest extends \PHPUnit\Framework\TestCase
{
    private $Ipsum;

	public function setup()
	{
	}

    public function testCanInstantiateIpsum()
    {
        $this->Ipsum = new Ipsum(7, 3);
        $this->assertInstanceOf(Ipsum::class, $this->Ipsum);
    }

    public function testInvalidCount()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Count must be 1 or greater.');

        $this->Ipsum = new Ipsum(0,1);
    }

    public function testInvalidLength()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Length must be 1 or greater.');

        $this->Ipsum = new Ipsum(1,0);
    }
}
