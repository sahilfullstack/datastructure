<?php

class ReplaceGreatestOnRight {

	public function doYourJob($array)
	{
		$max_from_right = $array[count($array)-1];

		$array[count($array)-1] = -1;

		for($i = count($array)-2; $i >= 0; $i--)
		{
			$temp = $array[$i];

			$array[$i] = $max_from_right;

  
		    // Update the greatest element, if needed 
		    if($max_from_right < $temp)
		    {		    	
		       $max_from_right = $temp; 
		    }		  
		}

		return $array;
	}
}

$obj = new ReplaceGreatestOnRight;

$ans = $obj->doYourJob([16, 17, 4, 3, 5, 2]);

var_dump($ans);
