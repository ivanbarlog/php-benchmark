<?php

namespace ib\Tests;

use ib\Test;

/**
 * Class ForeachTest.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
class ForeachTest extends LoopTest implements Test
{
    public function testCase()
    {
        $data = $this->data;

        return function () use ($data) {
            $text = "";
            foreach ($data as $item) {
                $text .= $item;
            }
        };
    }

    public function description()
    {
        return "foreach loop test\nconcatenates thousand words within foreach loop";
    }
}

