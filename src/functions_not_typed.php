<?php

namespace Nfq\Akademija\Not_Typed {

	function calculateHomeWorkSum($numbers):int{
		$calcSum=0;
		foreach ($numbers as $num){
			$calcSum=$calcSum+$num;
		}
		return $calcSum;
	}
}