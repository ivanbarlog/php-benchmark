<?php

namespace ib;

/**
 * Interface Test.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
interface Test
{
    /**
     * @return callable
     */
    public function testCase();

    /**
     * @return string
     */
    public function description();
}
