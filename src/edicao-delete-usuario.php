<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Detalhes dos usuários</h2></div>
                    <div class="col-sm-4">
                    <form class="row g-3 needs-validation ms-3 pb-3" action="gerencia.php" method="post">
                        <div class="search-box">
                        <input type="text" name="input_busca" class="form-control" placeholder="Pesquisa&hellip;">
                        <div class="valid-feedback">
                            Sucesso!
                        </div>
                    </form>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nome <i class="fa fa-sort"></i></th>
                        <th>Email</th>
                        <th>CEP <i class="fa fa-sort"></i></th>
                        <th>Numero</th>
                        <th>Perfil <i class="fa fa-sort"></i></th>
                        <th>Actions <i class="fa fa-sort"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['nome']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['cep']; ?></td>
                        <td><?php echo $user['numero']; ?></td>
                        <td>Motorista</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>    
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Mostrando <b>5</b> de <b>25</b> Entradas</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div>


<!-- Modal -->
<div class="modal fade" id="editaUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atualização de cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="row g-3 needs-validation" action="atualizaCadastro.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label text-secondary">Nome Completo</label>
                    <input type="text" name="input_nome" class="form-control"  value="" required>
                <div class="valid-feedback">
                    Sucesso!
                </div>
                </div>
                <div class="col-md-6">
                <label for="email" class="form-label text-secondary">Email</label>
                <input type="email" name="input_email" class="form-control"required>
                <div class="invalid-feedback">
                    Por favor entre com um email para receber as novidades.
                </div>
            </div>
            <div class="col-md-4">
            <label for="validationCustom03" class="form-label text-secondary">CEP</label>
                <input type="text" name="input_cep" class="form-control"  value="" required>
                <div class="invalid-feedback">
                    Por favor entre com um CEP válido.
                </div>
            </div>
            <div class="col-md-2">
            <label for="validationCustom04" class="form-label text-secondary">Número</label>
                <input type="text" name="input_numero" class="form-control"  value="" required>
                <div class="invalid-feedback">
                    Por favor entre com um número válido.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label text-secondary">Perfil</label>
                <input type="text" name="input_perfil" class="form-control"  value="" required>
            <div class="invalid-feedback">
                Por favor entre com um número válido.
            </div>
            <div class="invalid-feedback">
                Você precisa aceitar para continuar.
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="btnSend" id="btnSend" value="Atualizar">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>