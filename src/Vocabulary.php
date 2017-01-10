<?php

/**
 * The customized Vocabulary used to generate random Ipsums
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Vocabulary
{
    /**
     * VOCAB class with definitions
     *
     * @var VOCAB
     */
    private $vocab;

	/**
	 * Constructor of Vocabulary
	 *
	 * @param VOCAB $vocab
	 */
    public function __construct(VOCAB $vocab)
    {
        $this->vocab = $vocab;
        $this->hasProperNouns($this->vocab);
		$this->hasVerbs($this->vocab);
		$this->hasDirectObjects($this->vocab);
		$this->hasPrepositions($this->vocab);
		$this->hasConjunctions($this->vocab);
    }

	/**
	 * Validate that part of speech exists in VOCAB class
	 *
	 * @param VOCAB  $vocab
	 * @param string $part
	 */
    private function validateVocabPart(VOCAB $vocab, string $part) : void
	{
		if(!is_array($vocab->$part)){
			throw new InvalidArgumentException($part . ' are required.');
		}
		if(!array_key_exists(0, $vocab->$part) || !is_string($vocab->$part[0])){
			throw new InvalidArgumentException($part . ' must contain strings.');
		}
	}

	/**
	 * validate that Proper Nouns are set
	 *
	 * @param VOCAB $vocab
	 */
	private function hasProperNouns(VOCAB $vocab) : void
	{
		$this->validateVocabPart($vocab, 'proper_nouns');
	}

	/**
	 * validate that Verbs are set
	 *
	 * @param VOCAB $vocab
	 */
	private function hasVerbs(VOCAB $vocab) : void
	{
		$this->validateVocabPart($vocab, 'verbs');
	}

	/**
	 * validate that Direct Objects are set
	 *
	 * @param VOCAB $vocab
	 */
	private function hasDirectObjects(VOCAB $vocab) : void
	{
		$this->validateVocabPart($vocab, 'direct_objects');
	}

	/**
	 * validate that Prepositions are set
	 *
	 * @param VOCAB $vocab
	 */
	private function hasPrepositions(VOCAB $vocab) : void
	{
		$this->validateVocabPart($vocab, 'prepositions');
	}

	/**
	 * validate that Conjunctions are set
	 *
	 * @param VOCAB $vocab
	 */
	private function hasConjunctions(VOCAB $vocab) : void
	{
		$this->validateVocabPart($vocab, 'conjunctions');
	}

    /**
     * set Specific Verbs
     *
     * @return array
     */
    public function setVerbs() : array
    {
        return $this->vocab->verbs;
    }

    /**
     * set Specific Proper Nouns
     *
     * @return array
     */
    public function setProperNouns() : array
    {
        return $this->vocab->proper_nouns;
    }

    /**
     * set Specific Direct Objects
     *
     * @return array
     */
    public function setDirectObjects() : array
    {
        return $this->vocab->direct_objects;
    }

    /**
     * set Specific Conjunctions
     *
     * @return array
     */
    public function setConjunctions() : array
    {
        return $this->vocab->conjunctions;
    }

    /**
     * set Specific Prepositions
     *
     * @return array
     */
    public function setPrepositions() : array
    {
        return $this->vocab->prepositions;
    }
}
