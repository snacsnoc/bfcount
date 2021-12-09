<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';

$config = array(
    'ShopUrl' => 'shop.myshopify.com',
    'ApiKey' => 'xxxxxxxx',
    'Password' => 'xxxxxxxx',   
    'Curl' => array(
        CURLOPT_TIMEOUT => 10,
        CURLOPT_FOLLOWLOCATION => true
    )
);

PHPShopify\ShopifySDK::config($config);


$shopify = new PHPShopify\ShopifySDK;
$params = array(
    'status' => 'any',
    'created_at_min' => '2021-10-10'
    
);

//We can use 'get' to get all orders or count to....count them all
$orders = $shopify->Order->count($params);


print_r($orders);