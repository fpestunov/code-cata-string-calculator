<?php

class StringCalculator
{
	public function add($numbers)
	{
		$numbers = $this->parseNumbers($numbers);

		$solution = 0;

		foreach ($numbers as $number) {

			$this->guardAgainstInvalidNumber($number);

			if ($number >= 1000) continue;
			
			$solution += $number;
		}

		return $solution;
	}

	private function guardAgainstInvalidNumber($number)
	{
		if ($number < 0) throw new InvalidArgumentException("Invalid number provided: {$number}");
	}

	private function parseNumbers($numbers)
	{
		// /,/ - просто запятая
		// /\s*,\s*/ - запятая с пробелами
		return array_map('intval', preg_split('/\s*(,|\\\n)\s*/', $numbers));
	}
}
