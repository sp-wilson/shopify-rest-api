<?php
include_once '../vendor/Shopify.php';

$shopify_url    = $_ENV["SHOPIFY_URL"];
$shopify_api    = $_ENV["SHOPIFY_API"];
$shopify_secret = $_ENV["SHOPIFY_SECRET"];

$api = new Shopify( $shopify_url, [
    'api_key' => $shopify_api,
    'secret'  => $shopify_secret,
]);

// $api = new Shopify($shopify_url, 'mysupersecrettoken');

// $result = $api->call('GET', 'admin/products.json', [
//     'ids' => '632910392,921728736',
//     'fields' => 'id,images,title',
// ]);

$site_path_var = $_SERVER["SITE_HTMLROOT"];

 echo 'This is Get' . $shopify_url . $site_path_var ;