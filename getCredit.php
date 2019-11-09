<?php
ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");

$user = "";
$pass = "";

echo $client->GetCredit($user,$pass);

?>