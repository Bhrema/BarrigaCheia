<?php

require_once "../config.php";

$user = $_POST['input_user'];
$passw = $_POST['input_passw'];

$sql = "SELECT user, passw FROM cadastro WHERE "