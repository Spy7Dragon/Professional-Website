<?
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$company = $_REQUEST["company"];
$email = $_REQUEST["emailAddr"];
$street = $_REQUEST["streetAddr"];
$city = $_REQUEST["city"];
$state = $_REQUEST["state"];
$zip = $_REQUEST["zip"];
$country = $_REQUEST["country"];
$phone = $_REQUEST["phone"];
$inquiry = $_REQUEST["inquiry"];

$file = "Inquiries.txt";
$fp = fopen($file, "a") or die ("Couldn't open $file for writing!");
fwrite($fp, "Name: " . $firstname . " " . $lastname . "\r\n") or die ("Couldn't write name");
fwrite($fp, "Company: " . $company . "\r\n") or die ("Couldn't write company");
fwrite($fp, "Email: " . $email . "\r\n") or die ("Couldn't write email");
fwrite($fp, "Street   " . $street . "\r\n") or die ("Counldn't write street address");
fwrite($fp, "Address: " . $city . ", " . $state . " " . $zip . "\r\n") or die ("Couldn't write the rest of address");
fwrite($fp, "Country: " . $country . "\r\n") or die ("Couldn't write country");
fwrite($fp, "Phone#: " . $phone . "\r\n") or die ("Couldn't write phone number");
fwrite($fp, "Inquiry: " . $inquiry . "\r\n") or die ("Couldn't write the comment");
fwrite($fp, date("m/d/y : H:i:s", time())) or die ("Couldn't find the time");
fwrite($fp, "\r\n\r\n") or die ("Couldn't find the space");
fclose($fp);

echo "Entry was successful.\r\n";

$emailMsg = "";
$emailMsg .= "Name: " . $firstname . " " . $lastname . "\r\n" or die ("Couldn't write name");
$emailMsg .= "Company: " . $company . "\r\n" or die ("Couldn't write company");
$emailMsg .= "Email: " . $email . "\r\n" or die ("Couldn't write email");
$emailMsg .= "Street   " . $street . "\r\n" or die ("Counldn't write street address");
$emailMsg .= "Address: " . $city . ", " . $state . " " . $zip . "\r\n" or die ("Couldn't write the rest of address");
$emailMsg .= "Country: " . $country . "\r\n" or die ("Couldn't write country");
$emailMsg .= "Phone#: " . $phone . "\r\n" or die ("Couldn't write phone number");
$emailMsg .= "Inquiry: " . $inquiry . "\r\n" or die ("Couldn't write the comment");
$emailMsg .= date("m/d/y : H:i:s", time()) or die ("Couldn't find the time");
$emailMsg .= "\r\n\r\n" or die ("Couldn't find the space");

if (@mail("bhugg002@odu.edu", "New Inquiry", $emailMsg))
{
	echo "Email sent to Branden Huggins";
}
else
{
	echo "Email not sent to Branden Huggins";
}

$URL = "index.html";
header("Location: $URL");

?>