<?php

session_start();
require_once "../config.php";

$email = addslashes($_POST['email']);
$passw = sha1(addslashes($_POST['password']));

//Verificando se existe esse cadastro no DB, se existir ele loga, caso não, ele aparece uma msg de erro
if(isset($email, $passw) && !empty($email && $passw)) {
    $sql = "SELECT * FROM cadastro WHERE email = '$email' AND passw = '$passw' ";
 
    $check = $conn->query($sql);

    if ($check->num_rows > 0) {
        foreach ($check->fetch_assoc() as $key => $data){
            if($key == 'cpfCnpj')
                $_SESSION['cpfCnpj'] = $data;
            if($key == 'perfil'){
                switch($data){
                    case 'Motorista':
                        header('Location: rotas.php');
                        break;
                    case 'Doador':
                        header('Location: minhasDoacoes.php');
                        break;
                    case 'Beneficiario':
                        header('Location: meusRecebimentos.php');
                        break;
                    default: 
                        header("location: gerenciamento.php");
                }
            }
        }
	}else{
		$_SESSION['msg'] = 'Campos preenchidos incorretamente!';
        header("location: index.php");
    }
}