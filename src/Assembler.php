<?php

/**
 * Assembles and creates sentences based on grammer and vocabulary.
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Assembler
{
    /**
     * Vocabulary Class
     *
     * @var Vocabulary
     */
    private $vocab;

    /**
     * Array of Proper Nouns
     *
     * @var array
     */
    private $properNouns;

    /**
     * Array of Verbs
     *
     * @var array
     */
    private $verbs;

    /**
     * Array of Conjuctions
     *
     * @var array
     */
    private $conjuctions;

    /**
     * Array of Prepositions
     *
     * @var array
     */
    private $prepositions;

    /**
     * [$directObjects description]
     *
     * @var [type]
     */
    private $directObjects;

    /**
     * Array of Sentence Patterns
     *
     * @var array
     */
    private $sentencePatterns;

    /**
     * Constructor of Assembler
     *
     * @param Vocabulary $vocab
     */
    public function __construct(Vocabulary $vocab)
    {
        $this->vocab = $vocab;
        $this->resetVocab();
        $this->sentencePatterns = $this->vocab->setSentencePatterns();
    }

    /**
     * Resets Vocabulary arrays to default values
     *
     * @return void
     */
    private function resetVocab() : void
    {
        $this->properNouns = $this->vocab->setProperNouns();
        $this->verbs = $this->vocab->setVerbs();
        $this->conjuctions = $this->vocab->setConjunctions();
        $this->prepositions = $this->vocab->setPrepositions();
        $this->directObjects = $this->vocab->setDirectObjects();
    }

    /**
     * Gets a word from an array and removes it so it will not
     * be duplicated later.
     *
     * @param  string $arrayName
     *
     * @return string
     */
    private function getUniqueWord(string $arrayName) : string
    {
        $key = array_rand($this->$arrayName);
        $word = $this->$arrayName[$key];
        unset($this->$arrayName[$key]);
        return $word;
    }

    /**
     * Switch between all parts of speech to get the proper word.
     *
     * @param  string $part
     *
     * @return string
     */
    private function getWordFromPart(string $part) : string
    {
        switch ($part) {
            case 'PN':
                return 'the ' . $this->getUniqueWord('properNouns');
                break;
            case 'V':
                return $this->getUniqueWord('verbs');
                break;
            case 'C':
                return $this->getUniqueWord('conjuctions');
                break;
            case 'P':
                return $this->getUniqueWord('prepositions');
                break;
            case 'DO':
                return $this->getUniqueWord('directObjects');
                break;
            default:
                throw new InvalidArgumentException('Invalid Part of Speech.');
                break;
        }
    }

    /**
     * Get a random sentence pattern.
     *
     * @return string
     */
    private function getRandomSentencePattern() : string
    {
        return $this->sentencePatterns[array_rand($this->sentencePatterns)];
    }

    /**
     * Primary function to create a unique sentence.
     *
     * @return string
     */
    public function createSentence() : string
    {
        $this->resetVocab();
        $pattern = explode(',', $this->getRandomSentencePattern());

        $return = '';
        foreach ($pattern as $part) {
            $return .= $this->getWordFromPart($part) . ' ';
        }
        return ucfirst(rtrim($return)) . '.';
    }
}
