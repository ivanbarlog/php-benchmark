# php-benchmark

## Requirements

- docker

## Install composer

```bash
docker run -v $(pwd):/app ivanbarlog/php-test composer install
```

## Run the tests

```bash
./run
```

You can provide the argument so the tests will run in specific PHP version - `7.1`|`7.0`|`5.6`. Defaults to `7.1`.

## Create your own tests

Simply implement `ib/Test` interface and add your tests to the `benchmark.php`

```php
<?php

require_once "vendor/autoload.php";

# create testbed and set the difficulty
$testBed = new \ib\Testbed(\ib\Testbed::HIGH_DIFFICULTY);

# create tests
$forLoop = new \ib\Tests\ForTest();
$foreachLoop = new \ib\Tests\ForeachTest();

# compare tests within testbed - you can compare as many tests as you wish
$testBed->compare($forLoop, $foreachLoop);
```
