<?php

/**
* @covers Assembler
* @covers Vocabulary
*/
class AssemblerTest extends \PHPUnit\Framework\TestCase
{
    private $Assembler;
    private $prophet;
    private $vocab;

	public function setup()
	{
        $this->prophet = new Prophecy\Prophet;
        $this->vocab = $this->prophet->prophesize("VOCAB");
	}

    public function testCanInstantiateAssembler()
    {
        $this->vocab->sentencePatterns = ['PN,C,PN,V,P,DO'];
        $this->Assembler = new Assembler(new Vocabulary($this->vocab->reveal()));
        $this->assertInstanceOf(Assembler::class, $this->Assembler);
    }

    public function testCreateSentence()
    {
        $this->vocab->sentencePatterns = ['PN,C,PN,V,P,DO'];
        $this->Assembler = new Assembler(new Vocabulary($this->vocab->reveal()));
        $this->assertInternalType('string', $this->Assembler->createSentence());
    }

    public function testHasInvalidPartOfSpeech()
    {
        $this->vocab->sentencePatterns = ['T'];
        $this->Assembler = new Assembler(new Vocabulary($this->vocab->reveal()));

        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Invalid Part of Speech.');

        $this->Assembler->createSentence();
    }
}
