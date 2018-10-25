<?php


class CountElement {

	public function getCountIterative($number, $element)
	{
		$string = "".$number."";
		// iterative way
		$length = strlen("".$number."");
		$count = 0;

		for($i = 0; $i < $length; $i++)
		{
			$element = substr($string, $i, 1);

			if($element == "0")
			{
				$count++;
			}
		}

		var_dump("count => ". $count);
	}

	public function getCountRecursion($string, $position, $count)
	{
		if($position == strlen($string)) return $count;

		if(substr($string, $position, 1) == "0")
		{
			$count++;
		}

		return $this->getCountRecursion($string, ++$position, $count);
	}

	public function getCountRecursionByNumber($number, $count)
	{
		if($number == 0) return $count;
	
		if($number%10 == 0)
		{
			++$count;
		}

		$new = floor($number/10);
	
		return $this->getCountRecursionByNumber($new, $count);
	}
}


$result = new CountElement;

// $result->getCountIterative(1001001111, 0);
// $anss = $result->getCountRecursion("1001001111", 0, 0);
$anss = $result->getCountRecursionByNumber(1001001111, 0);
var_dump($anss);