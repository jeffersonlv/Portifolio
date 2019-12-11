<?php

ini_set('display_errors', true);
foreach ($_POST as $k => $i) {
    $data = json_decode($k, true);
}

try {

    $options = array(
        'uri'        => 'urn:Handler',

        'location'   => 'endereço',
        'login'      => 'user',
        'password'   => 'pass',

        'encoding'   => 'UTF-8',
        'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP
    );

    $Ws = new SoapClient(NULL, $options);
    $response = $Ws->metodoDoWs(
        $params1,
        $params2,
        $params3
    );

    var_dump($response);

    $resultado = $Ws->__getLastRequest();

    file_put_contents('./' . $day . '-log-ws.log', date('y-d-m )') . json_encode($response) . "\n", FILE_APPEND | LOCK_EX);
} catch (Exception $e) {
    echo "<pre>";
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    var_dump($e);
    echo "<br><br>";
    var_dump($Ws->__getFunctions());
    echo "</pre>";
}

exit;
