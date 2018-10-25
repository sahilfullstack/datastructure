<?php

class HighestPowerOf2 {

	public function doYourJob($number)
	{
		$res = 0;
		for ($i=$number; $i >0 ; $i--) 
		{ 
			if($i%2==0)
			{
				$res = $i;
				break;				
			}
		}

		return $res;
	}
}

$obj = new HighestPowerOf2;

$ans = $obj->doYourJob(17);

var_dump($ans);
