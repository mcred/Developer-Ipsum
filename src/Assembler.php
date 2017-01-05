<?php

/**
 * Assembles and creates sentences based on grammer and vocabulary.
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Assembler
{
    private $vocab;
    private $proper_nouns;
    private $verbs;
    private $conjuctions;
    private $prepositions;
    private $directObjects;
    private $sentencePatterns;

    public function __construct(Vocabulary $vocab)
    {
        $this->vocab = $vocab;
        $this->resetVocab();
        $this->sentencePatterns = $this->setSentencePatterns();
    }

    private function resetVocab()
    {
        $this->proper_nouns = $this->vocab->setProperNouns();
        $this->verbs = $this->vocab->setVerbs();
        $this->conjuctions = $this->vocab->setConjunctions();
        $this->prepositions = $this->vocab->setPrepositions();
        $this->directObjects = $this->vocab->setDirectObjects();
    }

    private function setSentencePatterns()
    {
        return [
            'PN,C,PN,V,P,DO',
            'PN,V,P,DO,C,P,DO',
            'PN,V,P,DO'
        ];
    }

    private function getUniqueWord(string $array_name) : string
    {
        $key = array_rand($this->$array_name);
        $word = $this->$array_name[$key];
        unset($this->$array_name[$key]);
        return $word;
    }

    private function getWordFromPart(string $part) : string
    {
        switch ($part) {
            case 'PN':
                return $this->getUniqueWord('proper_nouns');
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
                throw new InvalidArgumentException('Not a valid sentence part.');
                break;
        }
    }

    private function getRandomSentencePattern()
    {
        return $this->sentencePatterns[array_rand($this->sentencePatterns)];
    }

    public function createSentence()
    {
        $this->resetVocab();
        $pattern = explode(',', $this->getRandomSentencePattern());

        $return = '';
        foreach ($pattern as $part) {
            $return .= $this->getWordFromPart($part) . ' ';
        }
        return rtrim($return) . '.';
    }
}
