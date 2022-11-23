
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
