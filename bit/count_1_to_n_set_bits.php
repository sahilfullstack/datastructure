<?php


class CountSetBits {

	public function toNSetBits($number)
	{
		$sumBits = 0;

		for($i = 1; $i <= $number; $i++)
		{
			$sumBits += $this->getSetBits($i);
		}

		return $sumBits;
	}

	public function getSetBits($number)
	{
		if($number <= 0) return 0;

		return (($number %2 == 0) ? 0 : 1) + $this->getSetBits($number/2);
	}
}

$a = new CountSetBits;
$result = $a->toNSetBits(6);
echo $result."\n";