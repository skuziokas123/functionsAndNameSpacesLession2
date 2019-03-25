<?php

namespace Nfq\Akademija {

	function calculateHomeWorkSum($numbers){
		$calcSum=0;
		foreach ($numbers as $num){
			$calcSum=$calcSum+$num;
		}
		return $calcSum;
	}
}