<?php
class CircleCISample
{
	private $amount;

	public function __construct($amount)
	{
		$this->amount = $amount;
	}

	public function getAmount()
	{
		return $this->amount;
	}

	public function negate()
	{
		return new CircleCISample(-1 * $this->amount);
	}
}