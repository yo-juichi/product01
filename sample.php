<?php

class Calc
{
	function __construct(){}

	public function add_taka($a, $b)
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

echo $calc->add_taka(5,7);
echo "\n";

echo $calc->diff(5,2);
echo "\n";
