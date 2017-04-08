<?php

require_once "vendor/autoload.php";

$testBed = new \ib\Testbed(\ib\Testbed::HIGH_DIFFICULTY);

$forLoop = new \ib\Tests\ForTest();
$foreachLoop = new \ib\Tests\ForeachTest();

$testBed->compare($forLoop, $foreachLoop);
