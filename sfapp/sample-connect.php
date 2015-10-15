<?php
try {
	define("USERNAME", "EMAIL");
	define("PASSWORD", "PASSWORD");
	define("SECURITY_TOKEN", "SECURITY_TOKEN");
	define("SOAP_CLIENT_BASEDIR", "force/soapclient");
	require_once (SOAP_CLIENT_BASEDIR . '/SforceEnterpriseClient.php');
	$mySforceConnection = new SforceEnterpriseClient();
	$mySforceConnection->createConnection("sfapp/enterprise.wsdl.xml");
	$mySforceConnection->login(USERNAME, PASSWORD.SECURITY_TOKEN);
} catch (Exception $e) {
  echo $e->faultstring;
}
?>