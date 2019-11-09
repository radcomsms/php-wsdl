<?php
// turn off the WSDL cache
ini_set("soap.wsdl_cache_enabled", "0");
try {
	$client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
	$user = "";
    $pass = "";
    $messageid = "";

	echo $client->CheckMessage($user,$pass,$messageid);
	echo $status;
} catch (SoapFault $ex) {
    echo $ex->faultstring;
}

//statusMessage : Finish => پایان یافته, NoContactWithTheOperator => عدم برقراری با اپراتور, Interacting =>  در حال ارتباط, 
//                NoAuthentication => عدم احراز هویت, Active => فعال, NoSendSMS => عدم ارسال پیامک, Cancel => انصراف 

//validMessage: approve => تایید شده, cancel => رد شده, notconfirm => منتظر تایید

?>