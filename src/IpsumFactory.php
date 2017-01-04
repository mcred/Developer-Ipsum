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
    private $assembler;

	public function __construct(string $type, int $count = 0, int $length = 0)
	{
		$this->type = $type;
		$this->count = $count;
		$this->length = $length;
		$this->assembler = new Assembler(new Vocabulary());

		$this->setIpsumType();
	}

	public function setIpsumType()
	{
		switch ($this->type) {
			case 'paragraphs':
				return new Paragraphs($this->assembler,$this->count,$this->length);
				break;

			default:
				throw new InvalidArgumentException('Not a valid ipsum type.');
				break;
		}
	}
}
