
<?php
ini_set("soap.wsdl_cache_enabled", "0");
$client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");

$username = '';
$password = '';
$ticket_id = '';

echo $client->GetTicketDetail($username,$password,$ticket_id);

?>