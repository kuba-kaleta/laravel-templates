<!-- Name: soap_dataaccess.php -->
<!-- Comment: Soap demo -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Soap</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body class="antialiased">

    <?php

    // soap_dataaccess.php

    $client = new SoapClient('https://www.dataaccess.com/webservicesserver/numberconversion.wso?WSDL'); # http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl
    var_dump($client->__getFunctions());

    echo "<br>";
    echo "<br>";

    try {
        $opts = array(
            'http' => array(
                'user_agent' => 'PHPSoapClient'
            )
        );
        $context = stream_context_create($opts);

        $wsdlUrl = 'https://www.dataaccess.com/webservicesserver/numberconversion.wso?WSDL';
        $soapClientOptions = array(
            'stream_context' => $context,
            'cache_wsdl' => WSDL_CACHE_NONE
        );

        $client = new SoapClient($wsdlUrl, $soapClientOptions);

        $checkVatParameters = array(
            'ubiNum' => 1
        );

        $result = $client->NumberToWords($checkVatParameters);
        print_r($result);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo "<br>";
    echo "<br>";

    $client = new SoapClient('http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL'); # http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl
    var_dump($client->__getFunctions());

    echo "<br>";
    echo "<br>";

    try {
        $opts = array(
            'http' => array(
                'user_agent' => 'PHPSoapClient'
            )
        );
        $context = stream_context_create($opts);

        $wsdlUrl = 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL';
        $soapClientOptions = array(
            'stream_context' => $context,
            'cache_wsdl' => WSDL_CACHE_NONE
        );

        $client = new SoapClient($wsdlUrl, $soapClientOptions);

        $result = $client->ListOfCurrenciesByName();
        print_r($result);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    ?>

</body>

</html>