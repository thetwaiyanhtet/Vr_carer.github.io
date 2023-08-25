<?php
$hostname = "hosting-do-user-14484910-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "vr_carer";
$username = "doadmin";
$password = "AVNS_QQM3_9X2C9YcTwx6gzm";
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname",
    $username,
    $password
);
