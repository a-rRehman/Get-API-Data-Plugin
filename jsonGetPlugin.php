<?php
/*
Plugin Name: Json Get
Description: Getting Data From Json Api.
Version: 1.0
Author: Your Name
 */

function fetch_data()
{

    $api_url = "http://localhost:3000/data";
    $response = wp_remote_get($api_url);
    $body = wp_remote_retrieve_body($response);

    echo "<pre>";
    var_dump($body);
    echo "</pre>";

    $data = json_decode($body, true);

    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    // echo "<pre>";
    // var_dump($data[0]["employees"][0]["id"]);
    // echo "</pre>";
}

add_shortcode("getData", "fetch_data");
