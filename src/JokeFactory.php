<?php

namespace GavinWalshe\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        'Chuck Norris counted to infinity... Twice.',
        'They once made a "Chuck Norris" brand toilet paper, but it wouldn\'t take shit from anybody.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
