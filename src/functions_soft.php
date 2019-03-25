<?php
namespace Nfq\Akademija\Soft {

	function calculateHomeWorkSum(int $numbers):int{
		$calcSum=0;
		foreach ($numbers as $num){
			$calcSum=$calcSum+$num;
		}
		return $calcSum;
	}
}