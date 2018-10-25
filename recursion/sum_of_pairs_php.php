<?php


class SumOfPairs {

	public function getPairs($array, $sum)
	{
		$pairs = [];

		for($i = 0; $i < count($array); $i++)
		{
			for($j = 0; $j < count($array); $j++)
			{
				if($array[$i] == $array[$j]) continue;

				if(($array[$i] + $array[$j]) == $sum) 
				{
					if($array[$i] < $array[$j])
					{
						$value1 = $array[$i];
						$value2 = $array[$j];
					}
					else
					{
						$value1 = $array[$j];
						$value2 = $array[$i];
					}
					if(in_array([$value1, $value2], $pairs)) continue;
					$pairs[] = [$value1, $value2];
				}
			}			
		}

		var_dump($pairs);
	}
}


$result = new SumOfPairs;

$result->getPairs([1,2,3,4,5], 86);
