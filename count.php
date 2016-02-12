<?php

$myFile = file('countlog.txt');
$count = $myFile[0];
$date = $myFile[1];
$me = trim($myFile[2]);
$viewer = $_SERVER['REMOTE_ADDR'];
$count = $count + 1;


if ($me != $viewer)
{
	$newDate = date("m-d-Y", time());

	if ($date != $newDate)
	{
		$emailMsg = "The view count is " . $count . " on " . $newDate . "\r\n" .
		"The previous view was on " . $date . ".";
		if (@mail("bhugg002@odu.edu", "Daily View Count", $emailMsg))
		{

		}
	}
	$write = fopen("countlog.txt", "w");
	fputs($write, $count . "\r\n");
	fputs($write, $newDate . "\r\n");
	fputs($write, $me);
	fclose($write);
}

?>