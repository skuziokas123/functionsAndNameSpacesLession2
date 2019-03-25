<?php
declare(strict_types=1);
namespace Nfq\Akademija\Strict {
	

	function calculateHomeWorkSum($numbers):int{
		$calcSum=0;
		foreach ($numbers as $num){
			$calcSum=$calcSum+$num;
		}
		return $calcSum;
	}
}