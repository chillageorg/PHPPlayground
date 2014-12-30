<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$data = json_decode(file_get_contents("php://input"));
$name = mysql_real_escape_string($data->uname);
$vorname = mysql_real_escape_string($data->vorname);
$email = mysql_real_escape_string($data->email);
$messagetxt = mysql_real_escape_string($data->message);


if($name && $vorname) {
	$to = "chillageorg@hispeed.ch";
	$subject = "Formular von chillgeo.ch";

	$header = 'From:'.$email . "\r\n" .
    		'Reply-To: chillageorg@hispeed.ch' . "\r\n" .
    		'X-Mailer: PHP/' . phpversion();

	$message = "\n";
	$message .= "Name: ".$name. "\n";
	$message .= "Vorname: ".$vorname. "\n\n";
	$message .= "Meldung:\n".$messagetxt. "\n";
	$strUrl = "<strong>--><a href=\"http://www.chillgeo.ch\" targed=\"_self\" >zur&uuml;ck</a></strong>";
	try {
		mail($to, $subject, $message,$header);
		echo "$to<br />";
		echo "$subject<br />";
		echo "$message<br />";
		echo "$header<br />";
	} catch (Exception $e) {
		echo "sentnosuccess";
	}



}
else {
	echo "senterror";
}