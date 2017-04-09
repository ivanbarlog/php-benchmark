<?php

namespace ib;

/**
 * Class Testbed.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
class Testbed
{
    const LOW_DIFFICULTY = 'low';
    const MEDIUM_DIFFICULTY = 'medium';
    const HIGH_DIFFICULTY = 'high';

    private $difficulty = self::LOW_DIFFICULTY;

    private static $results = [];

    const ORDER = 'order';

    const MEAN_TIME = 'meanTime';

    const DESCRIPTION = 'description';

    public function __construct($difficulty = self::LOW_DIFFICULTY)
    {
        $this->difficulty = $difficulty;
    }

    public function setDifficulty($difficulty)
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
            $order = $i + 1;
            printf("Running %d. test (%s difficulty)\n\n%s", $order, $this->difficulty, $test->description());

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

            self::$results[] = [
                self::ORDER => $order,
                self::MEAN_TIME => Tester::meanTime(),
                self::DESCRIPTION => $test->description(),
            ];
        }

        $this->showResults();
    }

    private function showResults()
    {
        printf("Test results (%s difficulty)\n######################\n", $this->difficulty);
        foreach (self::$results as $result) {
            printf(
                "%d. %s\nMean time: %f\n\n",
                $result[self::ORDER],
                $result[self::DESCRIPTION],
                $result[self::MEAN_TIME]
            );
        }
    }
}
