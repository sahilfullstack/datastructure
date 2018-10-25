<?php


class ReplaceWithPie {

	public function fillPi($string, $position)
	{
		$found = substr($string, $position, 2);

		if($found == "pi")
		{
			$f = substr($string, 0, $position);
			$l = substr($string, $position+2, strlen($string));
			$string = $f."3.14".$l;
		}

		$this->fillPi($string, ++$position);

	}

}


$result = new ReplaceWithPie;

$anss = $result->fillPi("xpiy", 0);
var_dump($anss);