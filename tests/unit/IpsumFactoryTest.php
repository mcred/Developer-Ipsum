<?php

/**
* @covers \IpsumFactory
*/
class IpsumFactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var IpsumFactory
     */
	private $IpsumFactory;

	public function setup()
	{
		$this->IpsumFactory = new IpsumFactory();
	}
}
