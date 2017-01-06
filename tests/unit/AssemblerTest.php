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
        $this->vocab = new VOCAB();
        $this->Assembler = new Assembler(new Vocabulary($this->vocab));
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
