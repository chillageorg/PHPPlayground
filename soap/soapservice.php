<?php

$soap = new SoapServer(
    'SharesWS.wsdl', 
array('uri' => 'http://localhost:8888/playground/admazing/','encoding'=>'ISO-8859-1')
);

$soap->setClass('WebServiceBusinessLogic');
$soap->handle();

class WebServiceBusinessLogic {

	function getShareRecords() {
		require_once 'db/dbexternal.php';
		if($db_external){
			$strQry = "SELECT * FROM shares";
			$result = mysql_query($strQry, $link);
			while($row = mysql_fetch_assoc($result))
			{
				$ausgabe[] = $row;

			}
		}
		return  $ausgabe;
	}
}
?>