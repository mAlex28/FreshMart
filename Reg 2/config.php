<?php
$db_user = "root";
$db_pass = "";
$db_name ="reg 2";

$db = new PDO('mysql:host=localhost;dbame=' . $db_name .';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);