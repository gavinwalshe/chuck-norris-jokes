# Chuck Norris Jokes

Create Chuck Norris Jokes in your next PHP project.

## Installation

Install using composer

```bash
composer require gavinwalshe/chuck-norris-jokes
```

## Usage

```php
use GavinWalshe\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
