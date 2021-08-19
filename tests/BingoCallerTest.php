<?php

use PHPUnit\Framework\TestCase;

class BingoCallerTest extends TestCase
{
	public function testWhenCallsANumberItsInTheValidRange()
	{
		$caller = new BingoCaller();
		$number = $caller->callNumber();

		$this->assertTrue($number >= 1 && $number <=75);

	}

	public function testWhenCalls75TimesAllNumbersArePresent()
	{
		$caller = new BingoCaller();
		$calledNumbers = [];
		$expectedNumbers = range(1, 75);

		for ($i=1; $i<=75; ++$i) {
			$calledNumbers[] = $caller->callNumber();
		}

		$this->assertEquals($expectedNumbers, $calledNumbers);
	}
}
