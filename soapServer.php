<?php
error_reporting(E_ALL ^E_DEPRECATED);
require_once './php-wsdl/class.phpwsdl.php';

class Handler {

    /**
     * @return string
     */
    public function metodoSoapServer($lead){
        return "metodoSoapServer";
    }
    
}

$soap=PhpWsdl::CreateInstance(
	null,								// PhpWsdl will determine a good namespace
	null,								// Change this to your SOAP endpoint URI (or keep it NULL and PhpWsdl will determine it)
	null,                               // Change this to a folder with write access
	Array(								// All files with WSDL definitions in comments
		'handler.php'
	),                                                           
	null,								// The name of the class that serves the webservice will be determined by PhpWsdl
	null,								// This demo contains all method definitions in comments
	null,								// This demo contains all complex types in comments
	false,								// Don't send WSDL right now
	false);

ini_set('soap.wsdl_cache_enabled',0);	// Disable caching in PHP
PhpWsdl::$CacheTime=0;			// Disable caching in PhpWsdl

// Run the SOAP server
if($soap->IsWsdlRequested())			// WSDL requested by the client?
$soap->Optimize=false;				// Don't optimize WSDL to send it human readable to the browser
//$soap->ParseDocs=false;				// Uncomment this line to disable the whole documentation features
//$soap->IncludeDocs=false;				// Uncomment this line to disable writing the documentation in WSDL XML
//$wsdl=$soap->CreateWsdl();			// This would save the WSDL XML string in $wsdl
//$php=$soap->OutputPhp(false,false);	// This would save a PHP SOAP client as PHP source code string in $php
//$html=$soap->OutputHtml(false,false);	// This would save the HTML documentation string in $html
$soap->RunServer();	