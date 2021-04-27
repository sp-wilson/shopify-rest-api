<?php

// required headers
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

if($_SERVER["REQUEST_METHOD"]=="GET") {
    require_once('api/get.php');
} else if($_SERVER["REQUEST_METHOD"]=="POST") {
    require_once('api/post.php');
} else {
	http_response_code(405);
}