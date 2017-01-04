<?php

/**
 * Assembles and creates sentences based on grammer and vocabulary.
 *
 * @author     Derek Smart <derek@grindaga.com>
 */
class Assembler
{
    public function __construct()
    {
    }

    public function getRandomWord()
    {
        $words = [
            'World class',
            'API’s',
            'and',
            'tabs vs. spaces',
            'integrate',
            'with',
            'your',
            'developer',
            'in',
            'an',
            'agile',
            'standing desk',
            'GitHub',
            'coffee breaks',
            'no',
            'ego',
            'methodology',
            'deploys',
            'to',
            'waterfall',
            'ops',
            'Whiteboard',
            'sprint',
            'the',
            'nutter butter',
            'stash',
            'server',
            'configuration'
        ];
        return $words[rand(0, count($words) - 1)];
    }
}
