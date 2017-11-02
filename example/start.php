<?php

// Include the autoload.php from its vendor directory
//require 'vendor/autoload.php'
/**
require_once(dirname(__DIR__) . '/vendor/autoload.php');

// Create the base Blockchain class instance
$Blockchain = new \Blockchain\Blockchain();

// Needed before calling $Blockchain->Wallet or $Blockchain->Create
$Blockchain->setServiceUrl('http://localhost:3000');

**/
/**
require_once(dirname(__DIR__) . '/vendor/autoload.php');

$api_code = null;
if(file_exists('code.txt')) {
    $api_code = trim(file_get_contents('code.txt'));
}

$Blockchain = new \Blockchain\Blockchain($api_code);
$Blockchain->setServiceUrl("http://localhost:3000");
$wallet = $Blockchain->Create->create('123456');

echo('<pre>');
print_r($wallet);

print_r($Blockchain->log);
**/

$url= 'https://blockchain.info/tobtc?currency=USD&value=500&format=json';
$data = file_get_contents($url);
echo($data);

echo(file_get_contents('https://blockchain.info/ticker?format=json'));
?>