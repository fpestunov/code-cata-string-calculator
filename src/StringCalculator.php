<?php

class StringCalculator
{
	const MAX_NUMBER_ALLOWED = 1000;

	public function add($numbers)
	{
		$numbers = $this->parseNumbers($numbers);

		$numbers = array_map(function($number)
		{
			$this->guardAgainstInvalidNumber($number);

			if ($number >= self::MAX_NUMBER_ALLOWED)
			{
				return 0;
			}

			return $number;

		}, $numbers);

		return array_sum($numbers);
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
