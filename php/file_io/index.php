<?php 

	/*$file = fopen('user.txt', 'r');
	$content = fread($file, filesize('user.txt'));
	echo $content;
	fclose($file);*/


	/*$file = fopen('user.txt', 'w');
	fwrite($file, 'test ...');
	echo "done";
	fclose($file);*/

	$file = fopen('user.txt', 'a');
	fwrite($file, "test ...\r\n");
	echo "done";
	fclose($file);
?>