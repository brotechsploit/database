<?php

$db_server = 'tcp://5.tcp.eu.ngrok.io:10524';
$db_user = 'root';
$db_pass ='';
$db_name = 'hospital';

$con = new mysqli($db_server,$db_user,$db_pass,$db_name);


if($con){
    echo 'successfully connected';
}





?>