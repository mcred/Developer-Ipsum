<?php

/**
* @covers Vocabulary
*/
class VocabularyTest extends \PHPUnit\Framework\TestCase
{
    private $Vocabulary;
    private $prophet;
    private $vocab;

	public function setup()
	{
        $this->prophet = new Prophecy\Prophet;
        $this->vocab = $this->prophet->prophesize("VOCAB");
	}

    public function testMissingStringException()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('proper_nouns must contain strings.');

        $this->vocab->proper_nouns = [];
        $this->Vocabulary = new Vocabulary($this->vocab->reveal());
    }

    public function testMissingPartException()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('verbs are required.');

        $this->vocab->verbs = 0;
        $this->Vocabulary = new Vocabulary($this->vocab->reveal());
    }

}
