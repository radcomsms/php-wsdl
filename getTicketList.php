
<?php
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");

    $username = '';
    $password = '';

    echo $client->GetTicketList($username,$password);

?>