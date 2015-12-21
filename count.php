<?php

$myFile = file('countlog.txt');
$count = $myFile[0];
$date = $myFile[1];
$count = $count + 1;

$newDate = date("m-d-Y", time());

if ($date != $newDate)
{
	$emailMsg = "The view count is " . $count;

	if (@mail("bhugg002@odu.edu", "Daily View Count", $emailMsg))
	{

	}
}

$write = fopen("countlog.txt", "w");
fputs($write, $count . "\r\n");
fputs($write, $newDate);
fclose($write);

?>