<?php


class CountSetBits {

	public function getSetBits($number)
	{
		if($number <= 0) return 0;

		return (($number %2 == 0) ? 0 : 1) + $this->getSetBits($number/2);
	}
}

$a = new CountSetBits;
$result = $a->getSetBits(6);
echo $result;