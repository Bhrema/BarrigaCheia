<?php

session_start();
require_once "../config.php";

$email = addslashes($_POST['email']);
$passw = addslashes($_POST['password']);

//Verificando se existe esse cadastro no DB, se existir ele loga, caso não, ele aparece uma msg de erro
if(isset($email, $passw) && !empty($email && $passw)) {
    $sql = "SELECT * FROM cadastro WHERE email=user AND passw=pass";
 
    if($check = mysqli_prepare($conn, $sql)){
        $check->bind_param('user',$email );
	    $check->bind_param('pass',$passw);
        $check->execute();
    }
	
    $result = $check->get_result();
    $user = $result->fetch_array(MYSQLI_ASSOC);

	if ($row->rowCount() > 0) {
		$_SESSION['cpfCnpj'] = $user['cpfCnpj'];

		header("location: index.php");
	} else{
		$_SESSION['msg'] = 'Campos preenchidos incorretamente!';
	}
}