﻿<?php
mb_internal_encoding("UTF-8");
	 error_reporting(E_ALL);
 ini_set("display_errors", 1);

require_once('transliterate.php');
	
	$sample = 	'།དམིགས་མེད་བརྩེ་བའི་གཏེར་ཆེན་སྤྱན་རས་གཟིགས།
						།དྲི་མེད་མཁྱེན་པའི་དབང་པོ་འཇམ་དཔལ་དབྱངས།
						།བདུད་དཔུང་མ་ལུས་འཇོམས་མཛད་གསང་བའི་བདག།
						།གངས་ཅན་མཁས་པའི་གཙུག་རྒྱན་ཙོང་ཁ་པ།
						།བློ་བཟང་གྲགས་པའི་ཞབས་ལ་གསོལ་བ་འདེབས། ';
						
		
	transliterate($sample, 'ACIP');
	
?>