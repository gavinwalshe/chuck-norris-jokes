<?php

namespace GavinWalshe\ChuckNorrisJokes\Tests;

use GavinWalshe\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
	/** @test */
	public function it_returns_a_random_joke()
	{
		$jokes = new JokeFactory([
			'This is a joke',
		]);

		$joke = $jokes->getRandomJoke();

		$this->assertSame('This is a joke', $joke);
	}

/** @test */
	public function it_returns_a_predefined_joke()
	{
		$chuckNorrisJokes = [
			'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
			'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
			'Chuck Norris counted to infinity... Twice.',
			'They once made a "Chuck Norris" brand toilet paper, but it wouldn\'t take shit from anybody.'
		];

		$jokes = new JokeFactory();

		$joke = $jokes->getRandomJoke();

		$this->assertContains($joke, $chuckNorrisJokes);
	}
}