<?php
mb_internal_encoding("UTF-8");
	 error_reporting(E_ALL);
 ini_set("display_errors", 1);

function transliterate($data, $system){

	if ($system == 'ACIP'){
		require_once('ACIPtables.php');
		}
//TO DO: make extended Wylie tables	
	/*elseif($system == 'extendedWylie'){
		include_once "extendedWylieTables.php";
		}*/
	
	$stage1 = str_replace($stage1IN, $stage1OUT, $data);
	$stage2 = str_replace($stage2IN, $stage2OUT, $stage1);
	$stage3 = str_replace($stage3IN, $stage3OUT, $stage2);
	$stage4 = str_replace($stage4IN, $stage4OUT, $stage3);
	$stage5 = str_replace($stage5IN, $stage5OUT, $stage4);
	$stage6a = str_replace($stage6IN, $stage6OUT, $stage5);
	$stage6b = str_replace($stage6IN, $stage6OUT, $stage6a);
	$stage7 = str_replace($stage7IN, $stage7OUT, $stage6b);
	$stage8 = str_replace($stage8IN, $stage8OUT, $stage7);
	$stage9 = str_replace($stage9IN, $stage9OUT, $stage8);
	$stage10 = str_replace($stage10IN, $stage10OUT, $stage9);
	$stage11 = str_replace($stage11IN, $stage11OUT, $stage10);
	echo $stage11;
	}
?>