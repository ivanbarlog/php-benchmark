<?php

declare(strict_types=1);

namespace ib;

/**
 * Class Tester.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
class Tester
{
    const LOW_CYCLES    = 10000;
    const MEDIUM_CYCLES = 100000;
    const HIGH_CYCLES   = 1000000;

    const START = 'start';
    const END = 'end';
    const DIFF = 'diff';

    private static $times = [];
    private static $meanTime = null;

    public static function low(callable $test)
    {
        self::run($test, self::LOW_CYCLES);
    }

    public static  function medium(callable $test)
    {
        self::run($test, self::MEDIUM_CYCLES);
    }

    public static function high(callable $test)
    {
        self::run($test, self::HIGH_CYCLES);
    }

    public static function meanTime()
    {
        return self::$meanTime;
    }

    private static function run(callable $test, int $cycles)
    {
        self::reset($cycles);
        self::test($test, $cycles);
        self::calculateDifferences($cycles);
        self::calculateMeanTime($cycles);
    }

    private static function test(callable $test, int $cycles)
    {
        printf("Starting the test...\n");
        $start = microtime(true);
        for ($i = 0; $i < $cycles; ++$i) {
            self::$times[$i][self::START] = microtime(true);
            call_user_func($test);
            self::$times[$i][self::END] = microtime(true);
        }
        $end = microtime(true);
        printf("Test ended. (%10.6f)\n", $end - $start);
    }

    private static function calculateMeanTime(int $cycles)
    {
        printf("Calculating mean time\n");
        $start = microtime(true);
        for ($i = 0; $i < $cycles; ++$i) {
            self::$meanTime += self::$times[$i][self::DIFF];
        }

        self::$meanTime = self::$meanTime / $cycles;

        $end = microtime(true);
        printf("Mean time calculated (%10.6f)\n", $end - $start);
    }

    private static function calculateDifferences(int $cycles)
    {
        printf("Calculating differences\n");
        $start = microtime(true);
        for ($i = 0; $i < $cycles; ++$i) {
            self::$times[$i][self::DIFF] = self::$times[$i][self::END] - self::$times[$i][self::START];
        }
        $end = microtime(true);
        printf("Differences calculated (%10.6f)\n", $end - $start);
    }

    private static function reset(int $cycles)
    {
        self::$times = [];
        self::$meanTime = 0;

        printf("Preparing the test...\n");
        $start = microtime(true);
        for ($i = 0; $i < $cycles; ++$i) {
            self::$times[$i][self::START] = 0;
            self::$times[$i][self::END] = 0;
            self::$times[$i][self::DIFF] = 0;
        }
        $end = microtime(true);
        printf("Test prepared (%10.6f)\n\n", $end - $start);
    }
}
