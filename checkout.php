<?php

require "vendor/autoload.php";

// loading env variables, do not forget to copy .env.example as .env and configure them according to your environment.
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// if your snipe-it has a self-signed cert, keep this to false
$client = new GuzzleHttp\Client(["verify" => false]);

// we get the id of the consumable to checkout from snipe-it : /checkout.php?consumable_id=
$consumable_id = $_GET["consumable_id"];

$response = json_decode($client->request("POST", $_ENV["SNIPE_IT_API_URI"]."/consumables/".$consumable_id."/checkout", [
    'body' => '{"assigned_to":'.$_ENV["SNIPE_IT_CHECKOUT_USER_ID"].'}',
    "headers" => [
        "Accept" => "application/json",
        "Content-Type" => "application/json",
        "Authorization" => "Bearer ".$_ENV["SNIPE_IT_API_KEY"],
    ],    
])->getBody(), true);

echo($response["status"]. " : ". $response["messages"]);