<?php
session_start();
if(isset($_SESSION['cpfCnpj'])){
    session_destroy();
}
header('Location: index.php');
