<?php
    session_start();
    require_once "../config.php";

    if(!isset($_SESSION['cpfCnpj']))
        header("location: index.php");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $cpfcnpj = $_GET['cpfCnpj'];

        $sql = "SELECT * FROM cadastro WHERE cpfCnpj = '$cpfcnpj'";
            
        $exists = $conn->query($sql);
        if ($exists->num_rows > 0) {      
            $user = $exists->fetch_assoc();
        }else{
            $_SESSION['editError'] = 'Usuário não encontrado';
            header("Location: gerenciamento.php");
        }
    }else{
        $cpfcnpj = $_GET['cpfCnpj'];
        $nome = addslashes($_POST['input_nome']);
        $email = addslashes($_POST['input_email']);
        $cep = addslashes($_POST['input_cep']);
        $numero = addslashes($_POST['input_numero']);
        $perfil = addslashes($_POST['input_perfil']);

        $sql = "UPDATE cadastro SET 
            nome ='$nome' , email ='$email' , cep ='$cep' , numero ='$numero' , perfil ='$perfil' 
            WHERE cpfCnpj = '$cpfcnpj'";

        if($conn->query($sql))
            header("Location: gerenciamento.php");
        else{
            $_SESSION['editError'] = 'Erro ao editar usuário';
            header("Location: gerenciamento.php");
        }

    }
?>
<form class="row g-3 needs-validation" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label text-secondary">Nome Completo</label>
            <input type="text" name="input_nome" class="form-control"  value="<?= $user['nome'] ?? '' ?>" required>
        </div>
        <div class="col-md-6">
        <label for="email" class="form-label text-secondary">Email</label>
        <input type="email" name="input_email" class="form-control" value="<?= $user['email'] ?? '' ?>" required>
    </div>
    <div class="col-md-4">
    <label for="validationCustom03" class="form-label text-secondary">CEP</label>
        <input type="text" name="input_cep" class="form-control"  value="<?= $user['cep'] ?? '' ?>" required>
    </div>
    <div class="col-md-2">
    <label for="validationCustom04" class="form-label text-secondary">Número</label>
        <input type="text" name="input_numero" class="form-control"  value="<?= $user['numero'] ?? '' ?>" required>

    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label text-secondary">Perfil</label>
        <input type="text" name="input_perfil" class="form-control"  value="<?= $user['perfil'] ?? '' ?>" required>
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" name="btnSend" id="btnSend" value="Atualizar">
    </div>
</form>
