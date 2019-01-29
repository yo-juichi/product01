<?php

class Calc
{
	function __construct(){}

	public function addTaka($a, $b)
	{
		$c = $a + $b;
		return $c;
	}

        public function diff($a, $b)
        {
		if ($a < $b) {
			return 0;
		}

                $c = $a - $b;
                return $c;
	}
	
}

$calc = new Calc();

echo $calc->addTaka(5,7);
echo "\n";

echo $calc->diff(5,2);
echo "\n";
