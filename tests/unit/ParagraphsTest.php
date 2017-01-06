<?php

/**
* @covers Paragraphs
*/
class ParagraphsTest extends \PHPUnit\Framework\TestCase
{
    private $assembler;
    private $vocab;

	public function setup()
	{
        $this->vocab = new VOCAB();
        $this->assembler = new Assembler(new Vocabulary($this->vocab));
	}

    public function testCanInstantiateParagraphs()
    {
        $this->Paragraphs = new Paragraphs($this->assembler, 7, 3);
        $this->assertInstanceOf(Paragraphs::class, $this->Paragraphs);
    }

    public function testCanGenerate()
    {
        $this->Paragraphs = new Paragraphs($this->assembler, 1, 1);
        $this->Paragraphs->generate();
    }
}
