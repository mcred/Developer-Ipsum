<?php

/**
* @covers \DevIpsum
*/
class DevIpsumTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var DevIpsum
     */
	private $DevIpsum;

	public function setup()
	{
		$this->DevIpsum = new DevIpsum();
	}
}
