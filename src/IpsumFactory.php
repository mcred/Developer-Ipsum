<?php
/**
 * Factory for Ipsum Formats
 *
 * @author Derek Smart <derek@grindaga.com>
 */
class IpsumFactory
{
    /**
     * Return a concrete instance of an Ipsum Class. 
     *
     * @param  string  $type
     * @param  integer $count
     * @param  integer $length
     *
     * @throws Exception
     * @return object
     */
	public static function create(string $type, int $count = 0, int $length = 0)
	{
        $assembler = new Assembler(new Vocabulary());
		switch ($type) {
			case 'paragraphs':
				return new Paragraphs($assembler,$count,$length);
				break;

			default:
				throw new InvalidArgumentException('Not a valid ipsum type.');
				break;
		}
	}
}
