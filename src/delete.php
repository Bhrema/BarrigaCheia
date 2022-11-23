<?php
require_once "../config.php";

if(!isset($_SESSION['cpfCnpj']))
    header("location: index.php");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $cpfcnpj = $_GET['cpfCnpj'];

    $sql = "SELECT * FROM cadastro WHERE cpfCnpj = '$cpfcnpj'";
        
    $exists = $conn->query($sql);
    if ($exists->num_rows > 0) {      
        $sql = "DELETE FROM cadastro WHERE cpfCnpj = '$cpfcnpj'";

        if($conn->query($sql))
            header("Location: gerenciamento.php");
        else{
            $_SESSION['deleteError'] = 'Erro ao deleter usuário';
            header("Location: gerenciamento.php");
        }
    }else{
        $_SESSION['deleteError'] = 'Usuário não encontrado';
        header("Location: gerenciamento.php");
    }

}