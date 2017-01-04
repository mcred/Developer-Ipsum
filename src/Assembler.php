<?php

/**
 * Assembles and creates sentences based on grammer and vocabulary.
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Assembler
{
    private $proper_nouns;
    private $verbs;
    private $conjuctions;
    private $prepositions;
    private $directObjects;
    private $sentencePatterns;

    public function __construct(Vocabulary $vocab)
    {
        $this->proper_nouns = $vocab->setProperNouns();
        $this->verbs = $vocab->setVerbs();
        $this->conjuctions = $vocab->setConjunctions();
        $this->prepositions = $vocab->setPrepositions();
        $this->directObjects = $vocab->setDirectObjects();
        $this->sentencePatterns = $this->setSentencePatterns();
    }

    private function setSentencePatterns()
    {
        return [
            'PN,C,PN,V,P,DO',
            'PN,V,P,DO,C,P,DO',
            'PN,V,P,DO'
        ];
    }

    private function getWordFromPart(string $part) : string
    {
        switch ($part) {
            case 'PN':
                $key = array_rand($this->proper_nouns);
                $word = $this->proper_nouns[$key];
                unset($this->proper_nouns[$key]);
                return $word;
                break;
            case 'V':
                $key = array_rand($this->verbs);
                $word = $this->verbs[$key];
                unset($this->verbs[$key]);
                return $word;
                break;
            case 'C':
                $key = array_rand($this->conjuctions);
                $word = $this->conjuctions[$key];
                unset($this->conjuctions[$key]);
                return $word;
                break;
            case 'P':
                $key = array_rand($this->prepositions);
                $word = $this->prepositions[$key];
                unset($this->prepositions[$key]);
                return $word;
                break;
            case 'DO':
                $key = array_rand($this->directObjects);
                $word = $this->directObjects[$key];
                unset($this->directObjects[$key]);
                return $word;
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
        $pattern = explode(',', $this->getRandomSentencePattern());

        $return = '';
        foreach ($pattern as $part) {
            $return .= $this->getWordFromPart($part) . ' ';
        }
        return rtrim($return) . '.';
    }
}
