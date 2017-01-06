<?php

/**
* @covers IpsumFactory
*/
class IpsumFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var IpsumFactory
     */
	private $IpsumFactory;

	public function setup()
	{
        $this->vocab = new VOCAB();
        $this->IpsumFactory = new IpsumFactory($this->vocab);
	}

    public function testCanInstantiateWords()
    {
        $this->assertInstanceOf(IpsumFactory::class, $this->IpsumFactory);
    }

    public function testCanSetParagraphs()
    {
        $paragraph = $this->IpsumFactory->create('paragraphs', 1, 1);
        $this->assertInstanceOf(Paragraphs::class, $paragraph);
    }

    public function testInvalidIpsumType()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Not a valid ipsum type.');

        $this->IpsumFactory->create('notParagraphs');
    }
}
