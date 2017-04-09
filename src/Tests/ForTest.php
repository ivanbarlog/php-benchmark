<?php

namespace ib\Tests;

use ib\Test;

/**
 * Class ForTest.
 * @author Ivan Barlog <ivan.barlog@everlution.sk>
 */
class ForTest extends LoopTest implements Test
{
    public function testCase()
    {
        $data = $this->data;

        return function () use ($data) {
            $text = "";
            for ($i =0; $i < count($data); ++$i) {
                $text .= $data[$i];
            }
        };
    }

    public function description()
    {
        return "for loop test\nconcatenates thousand words within for loop";
    }
}
