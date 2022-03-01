<?php

$link = mysqli_connect(hostname:"localhost", username:"root", password:"", database:"carrental");

if ($link == false){
    die("Error connecting".mysqli_connect_error($link));
}