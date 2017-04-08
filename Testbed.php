<?php

declare(strict_types=1);

namespace ib;

/**
 * Class Testbed.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
class Testbed
{
    public const LOW_DIFFICULTY = 'low';
    public const MEDIUM_DIFFICULTY = 'medium';
    public const HIGH_DIFFICULTY = 'high';

    private $difficulty = self::LOW_DIFFICULTY;

    private static $results = [];

    public function __construct(string $difficulty = self::LOW_DIFFICULTY)
    {
        $this->difficulty = $difficulty;
    }

    public function setDifficulty(string $difficulty)
    {
        if (false === in_array($difficulty, [self::LOW_DIFFICULTY, self::MEDIUM_DIFFICULTY, self::HIGH_DIFFICULTY])) {
            throw new \LogicException(sprintf("%s difficulty is not supported", $difficulty));
        }

        $this->difficulty = $difficulty;
    }
    
    public function compare(Test ...$tests)
    {
        for ($i = 0; $i < count($tests); ++$i) {
            $test = $tests[$i];
            printf("Running %d. test (%s difficulty)\n\n%s", $i, $this->difficulty, $test->description());

            switch ($this->difficulty) {
                case self::LOW_DIFFICULTY:
                    Tester::low($test->testCase());
                    break;
                case self::MEDIUM_DIFFICULTY:
                    Tester::medium($test->testCase());
                    break;
                case self::HIGH_DIFFICULTY:
                    Tester::high($test->testCase());
                    break;
            }

            self::$results[$i] = Tester::meanTime();
        }

        $this->processResults();
    }

    private function processResults()
    {

    }
}
