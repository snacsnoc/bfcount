<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$config = array('store_url'=>"shop.myshopify.com",
	'api_key'=>'xxxxxxxxx',
	'api_secret_key'=>'xxxxxxxx',
	'created_after' => '2021-11-10');



//Send an HTTP GET request with HTTP basic auth
$curl_url="https://".$config['api_key'].":".$config['api_secret_key']."@".$config['store_url']."/admin/api/2021-07/orders/count.json?status=any&created_at_min=".$config['created_after'];

$s=file_get_contents($curl_url);
print_r($s);

