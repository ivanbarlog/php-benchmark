<?php

declare(strict_types=1);

namespace ib;

/**
 * Interface Test.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
interface Test
{
    public function testCase(): callable;

    public function description(): string;
}
