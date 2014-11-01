<?php
require_once 'config/config.php';
$strService = HOSTPATH."soapservice.php";
$strServiceWSDL = HOSTPATH."soapservice.php?WSDL";
$strIndex = HOSTPATH."index.php";
$boolShowFunctions = false;


$soap = new SoapClient(
    $strServiceWSDL, 
array(
      'location' => $strService,'encoding'=>'ISO-8859-1'
      )
      );
      if ($boolShowFunctions) var_dump($soap->__getFunctions ()); // For Developers only
      try {
      	fnStoreShares($soap->getShareRecords());
      } catch (SoapFault $sf) {
      	echo 'Fehler: ' . htmlspecialchars($sf->faultstring);
      }

      function fnStoreShares($arrRecord) {
      	require_once 'db/dbinternal.php';
      	if($db_internal){
      		$strQryTruncate = "TRUNCTE TABLE shares";
      		$truncate = mysql_query($strQryTruncate,$link);
      		foreach ($arrRecord as $shares=>$val) {
      			
      			$array_data = array();
      			$iOffset = 0;
      			foreach ($val as $v) {
      				$setVal = $iOffset > 0 ? "'" . mysql_real_escape_string($v) ."'" :$v;
      				array_push($array_data, $setVal);$iOffset++;
      			}
      			$array_data = implode(',',$array_data);
      			$strQry = "INSERT INTO shares (".implode(',',array_keys($val)).") VALUES (".$array_data. ")";

      			echo "Auslesen und Abspeichern von: ". $val['share_name'] ."<br />";
      			$result = mysql_query($strQry,$link);
      		}
      	}
      }
      ?>
      <p><a href="<? echo $strIndex;?>" >Zur Liste</a></p>