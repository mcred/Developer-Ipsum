<?php

/**
* @covers Assembler
* @covers Vocabulary
*/
class AssemblerTest extends \PHPUnit\Framework\TestCase
{
    private $Assembler;

	public function setup()
	{
        $this->Assembler = new Assembler(new Vocabulary());
	}

    public function testCanInstantiateAssembler()
    {
        $this->assertInstanceOf(Assembler::class, $this->Assembler);
    }

    public function testCreateSentence()
    {
        $this->assertInternalType('string', $this->Assembler->createSentence());
    }
}
