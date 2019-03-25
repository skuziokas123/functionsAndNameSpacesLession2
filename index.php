<?php


namespace
{
require __DIR__.'/vendor/autoload.php';
	
	
	$numbersArr=array(3,2.2,"1");
	
	echo Nfq\Akademija\calculateHomeWorkSum(3,2.2,"1")."\n";
	
	echo Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3,2.2,"1")."\n";
	
	echo Nfq\Akademija\Soft\calculateHomeWorkSum(3,2.2,"1")."\n";
	
	echo Nfq\Akademija\Strict\calculateHomeWorkSum(3,2.2,"1")."\n";

}

