<?php
require "../config.php";

//validando os dados
echo $_POST['input_nome'];
    // validando nome
    $input_name = isset($_POST["input_nome"]) ? trim($_POST["input_nome"]) : '';
    if(empty($input_name))
        $nome_err = "Por favor entre com um nome.";
    elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/"))))
        $nome_err = "Por favor entre com um nome válido.";
    else
        $nome = $input_name;
    

    //validando email
    $input_email = isset($_POST["input_email"]) ? trim($_POST["input_email"]) : '';
    if(empty($input_email))
        $email_err = 'Por favor entre com um Email';
    else
        $email = addslashes($input_email);

    //validando CEP
    $input_cep = isset($_POST["input_cep"]) ? trim($_POST["input_cep"]): '';
    if(empty($input_cep))
        $cep_err = "Por favor entre com um CEP.";
    elseif(!filter_var($input_cep, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[0-9]{5}-[0-9]{3}$/"))))
        $cep_err = "Por favor entre com um CEP válido.";
    else
        $cep = $input_cep;

    //validando UF
    $input_uf = isset($_POST["input_uf"]) ? trim($_POST["input_uf"]) : '';
    if(empty($input_uf))
        $uf_err = "Por favor entre com uma sigla.";
    elseif(!filter_var($input_uf, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^(?i)(\s*(AC|AL|AP|AM|BA|CE|DF|ES|GO|MA|MT|MS|MG|PA|PB|PR|PE|PI|RJ|RN|RS|RO|RR|SC|SP|SE|TO)?)$/"))))
        $uf_err = "Por favor entre com um email válido.";
    else
        $uf = $input_uf;

    //validando cpf/cnpj
    $input_cpfCnpj = isset($_POST["input_numero"]) ? trim($_POST["input_numero"]): '';
    if(empty($input_cpfCnpj))
        $cpfCnpj_err = "Por favor entre com um CPF/CNPJ";
    else
        $cpfCnpj = addslashes($input_cpfCnpj);

    //validando numero talvez aqui esteja quebrando
    $input_numero = isset($_POST["input_numero"]) ? trim($_POST["input_numero"]) : '';
    if(!empty($input_numero))
        $numero = addslashes($input_numero);

    //validando email
    $input_complemento = isset($_POST["input_complemento"]) ? trim($_POST["input_complemento"]) : '';
    if(!empty($input_complemento))
        $complemento = $input_complemento;

    // valida igualdade das senhas
    $input_passw = isset($_POST["input_passw"]) ? trim($_POST["input_passw"]) : '';
    $input_verpassw = isset($_POST["input_verpassw"]) ?  trim($_POST["input_verpassw"]) : '';
    if($input_passw != $input_verpassw)
        $verpassw_err = "As senhas não correspondem, favor repetir o processo.";
    else{
        $passw = $input_passw;
        $verpassw = $input_verpassw;
    }


    $sql = "INSERT INTO cadastro (nome, email, cep, numero, complemento, uf, cpfCnpj, passw, verpassw)
        VALUES ('$nome', '$email', '$cep', '$numero', '$complemento', '$uf', '$cpfCnpj', '$passw', '$verpassw')";
        
    if($conn->query($sql) === TRUE){
        header('Location: index.php');
    }
       


