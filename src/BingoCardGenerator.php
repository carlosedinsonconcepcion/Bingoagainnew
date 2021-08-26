<?php

 

class BingoCardGenerator
{
	private $grid = [
		'B' => [],
		'I' => [],
		'N' => [],
		'G' => [],
		'O' => []

	]; 

	public function generate(): Card
	{
		$this->grid['B'] = $this->generateColumnWithBoundaries(1, 15);
		$this->grid['I'] = $this->generateColumnWithBoundaries(16, 30);
		$this->grid['N'] = $this->generateColumnWithBoundaries(31, 45);
		$this->grid['G'] = $this->generateColumnWithBoundaries(46, 60);
		$this->grid['O'] = $this->generateColumnWithBoundaries(61, 75);

		//Free space at the middle of the card
		$this->grid['N'][2] = null;

	 	 return new Card($this->grid);
	}

	public function generateColumnWithBoundaries($min, $max)
	{
		$column = [];

		while(sizeof($column) < 5) {
			$number = rand($min, $max);

			if (!in_array($number, $column)) {
				$column[] = $number;

			}
	
		}

		return $column;
	}
}
