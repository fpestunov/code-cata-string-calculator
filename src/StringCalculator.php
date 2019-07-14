<?php

class StringCalculator
{
	public function add($numbers)
	{
		// /,/ - просто запятая
		// /\s*,\s*/ - запятая с пробелами
		$numbers = preg_split('/\s*(,|\\\n)\s*/', $numbers);

		$solution = 0;

		foreach ($numbers as $number) {

			if ($number < 0) throw new InvalidArgumentException;
			if ($number >= 1000) continue;
			
			$solution += (int) $number;
		}

		return $solution;
	}
}
