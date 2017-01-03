<?php
/**
 * Factory for Ipsum Formats
 *
 * @author Derek Smart <derek@grindaga.com>
 */
class IpsumFactory
{
    private $type;
	private $count;
	private $length;

	public function __construct(string $type, int $count = 0, int $length = 0)
	{
		$this->type = $type;
		$this->count = $count;
		$this->length = $length;

		$this->setIpsumType();
	}

	public function setIpsumType()
	{
		switch ($this->type) {
			case 'words':
				return new Words($this->count,$this->length);
				break;

			default:
				throw new InvalidArgumentException('Not a valid ipsum type.');
				break;
		}
	}
}
