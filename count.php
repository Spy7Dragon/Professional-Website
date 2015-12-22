<?php

$myFile = file('countlog.txt');
$count = $myFile[0];
$date = $myFile[1];
$me = trim($myFile[2]);
$viewer = $_SERVER['REMOTE_ADDR'];
$count = $count + 1;


if ($me == $viewer)
{

}
else
{
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
	fputs($write, $newDate . "\r\n");
	fputs($write, $me);
	fclose($write);
}

?>