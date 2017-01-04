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
	}

    public function testCanInstantiateWords()
    {
        $this->IpsumFactory = new IpsumFactory();
        $this->assertInstanceOf(IpsumFactory::class, $this->IpsumFactory);
    }

    public function testInvalidIpsumType()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('Not a valid ipsum type.');

        $this->IpsumFactory = IpsumFactory::create('notParagraphs');
    }
}
