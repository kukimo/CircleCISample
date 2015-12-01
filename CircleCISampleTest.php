<?php
require_once 'CircleCISample.php';

class CircleCISampleTest extends PHPUnit_Framework_TestCase
{
	public function testCanBeNegated()
	{
		$a = new CircleCISample(1);
		$b = $a->negate();
		$this->assertEquals(-1, $b->getAmount());
	}
}