<?php
require "../config.php";
    // Startando as variáveis
    $nome = $email = $cep = $numero = $complemento = $uf = $cpfCnpj = $passw = $verpassw = "";
    $nome_err = $email_err = $cep_err = $uf_err = $cpfCnpj_err = $passw_err = $verpassw_err = "";
    //validando os dados
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    // validando nome
    $input_name = trim($_POST["input_nome"]);
    if(empty($input_name)){
        $nome_err = "Por favor entre com um nome.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nome_err = "Por favor entre com um nome válido.";
    } else{
        $nome = $input_name;
    }

    //validando CEP
    $input_cep = trim($_POST["input_cep"]);
    if(empty($input_cep)){
        $cep_err = "Por favor entre com um CEP.";
    } elseif(!filter_var($input_cep, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[0-9]{5}-[0-9]{3}$/")))){
        $cep_err = "Por favor entre com um CEP válido.";
    } else{
        $cep = $input_cep;
    }

    //validando email
    $input_email = trim($_POST["input_email"]);
    if(empty($input_email)){
        $email_err = "Por favor entre com um email.";
    } elseif(!filter_var($input_email, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i")))){
        $email_err = "Por favor entre com um email válido.";
    } else{
        $email = $input_email;
    }

    //validando UF
    $input_uf = trim($_POST["input_uf"]);
    if(empty($input_uf)){
        $uf_err = "Por favor entre com uma sigla.";
    } elseif(!filter_var($input_uf, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^(?i)(\s*(AC|AL|AP|AM|BA|CE|DF|ES|GO|MA|MT|MS|MG|PA|PB|PR|PE|PI|RJ|RN|RS|RO|RR|SC|SP|SE|TO)?)$/")))){
        $uf_err = "Por favor entre com um email válido.";
    } else{
        $uf = $input_uf;
    }

    //validando numero
    $input_numero = trim($_POST["input_numero"]);
    if(empty($input_numero)){
        $numero_err = "Por favor entre com um número.";
    } else{
        $numero = $input_numero;
    }

    //valida igualdade das senhas
    // $input_passw = trim($_POST["input_passw"]);
    // $input_verpassw = trim($_POST["input_verpassw"]);
    // if($input_passw != $input_verpassw){
    //     $verpassw_err = "As senhas não correspondem, favor repetir o processo.";
    // } else{
    //     $passw = $input_passw;
    //     $verpassw = $input_verpassw;
    // }

    //validando cpf/cnpj
    $input_cpfCnpj = trim($_POST["input_numero"]);
    if(empty($input_cpfCnpj)){
        $cpfCnpj_err = "Por favor entre com CPF ou CNPJ.";
    } else{
        $cpfCnpj = $input_cpfCnpj;
    }
    
    if(empty($nome_err) && empty($email_err) && empty($cep_err) && empty($uf_err) && empty($cpfCnpj_err) && empty($passw_err) && empty($verpassw_err)){
        // Criando o SQL de insert
        //nome	email	cep	numero	complemento	uf	cpfCnpj
        $sql = "INSERT INTO cadastro (nome, email, cep, numero, complemento, uf, cpfCnpj, passw, verpassw) VALUES ('$nome', '$email', '$cep', '$numero', '$complemento', '$uf', '$cpfCnpj', '$passw', '$verpassw')";
        if($conn->query($sql) === TRUE){
            //header("location: dashboard.html");
                exit();
        }
    }   
}
// $conn->close();
