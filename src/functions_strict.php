<?php
declare(strict_types=1);
namespace Nfq\Akademija\Strict {
	

	function calculateHomeWorkSum($number1, $number2, $number3):int{
		$calcSum=0;
		
		$calcSum=$number1+$number2+$number3;
		
		return $calcSum;
	}
}