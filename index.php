<?php


namespace
{
require __DIR__.'/vendor/autoload.php';
	
	
	$numbersArr=array(3,2.2,"1");
	
	echo Nfq\Akademija\calculateHomeWorkSum($numbersArr)."\n";
	
	echo Nfq\Akademija\Not_Typed\calculateHomeWorkSum($numbersArr)."\n";
	
	echo Nfq\Akademija\Soft\calculateHomeWorkSum($numbersArr)."\n";
	
	echo Nfq\Akademija\Strict\calculateHomeWorkSum($numbersArr)."\n";

}

