<?php
/**
 * Factory for Ipsum Formats
 *
 * @author Derek Smart <derek@grindaga.com>
 */
class IpsumFactory
{
	/**
	 * Instaniated Vocabulary Class
	 *
	 * @var Vocabulary
	 */
	private $Vocabulary;

	/**
	 * Contstuctor of IpsumFactory
	 *
	 * @param VOCAB $vocab
	 */
	public function __construct(VOCAB $vocab)
    {
		$this->Vocabulary = new Vocabulary($vocab);
    }

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
	public function create(string $type, int $count = 0, int $length = 0)
	{
        $assembler = new Assembler($this->Vocabulary);
		switch ($type) {
			case 'paragraphs':
				return new Paragraphs($assembler,$count,$length);
				break;

			case 'lists':
				return new Lists($assembler,$count,$length);
				break;

			default:
				throw new InvalidArgumentException('Not a valid ipsum type.');
				break;
		}
	}
}
