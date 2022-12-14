<?php
require_once "../config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barriga Cheia</title>
    <link href="../bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
</head>
<body>
    <header class="p-3 bg-dark text-white position-fixed position-sticky">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
    
            <img style="width: 70px;" src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNjQwIDQwMCIgZGF0YS1iYWNrZ3JvdW5kLWNvbG9yPSIjMjEyNTI5IiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWlkWU1pZCBtZWV0IiBoZWlnaHQ9IjQwMCIgd2lkdGg9IjY0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PHJlY3Qgd2lkdGg9IjY0MCIgaGVpZ2h0PSI0MDAiIHg9IjAiIHk9IjAiIG9wYWNpdHk9IjEiIGZpbGw9IiMyMTI1MjkiIGRhdGEtZmlsbC1wYWxldHRlLWNvbG9yPSJiYWNrZ3JvdW5kIiBpZD0iYmFja2dyb3VuZCI+PC9yZWN0PjxnIGlkPSJ0aWdodC1ib3VuZHMiIHRyYW5zZm9ybT0ibWF0cml4KDEsMCwwLDEsMTg4LjgyNDM5OTY4NzA5MjU4LDc2LjQpIj48c3ZnIHZpZXdCb3g9IjAgMCAyNjIuMzUxMjAwNjI1ODE0ODQgMjQ3LjIiIGhlaWdodD0iMjQ3LjIiIHdpZHRoPSIyNjIuMzUxMjAwNjI1ODE0ODQiPjxnPjxzdmcgdmlld0JveD0iMCAwIDI2Mi4zNTEyMDA2MjU4MTQ4NCAyNDcuMiIgaGVpZ2h0PSIyNDcuMiIgd2lkdGg9IjI2Mi4zNTEyMDA2MjU4MTQ4NCI+PGc+PHN2ZyB2aWV3Qm94PSIwIDAgMjYyLjM1MTIwMDYyNTgxNDg0IDI0Ny4yIiBoZWlnaHQ9IjI0Ny4yIiB3aWR0aD0iMjYyLjM1MTIwMDYyNTgxNDg0Ij48Zz48c3ZnIHZpZXdCb3g9IjAgMCAyNjIuMzUxMjAwNjI1ODE0ODQgMjQ3LjIiIGhlaWdodD0iMjQ3LjIiIHdpZHRoPSIyNjIuMzUxMjAwNjI1ODE0ODQiPjxnPjxzdmcgdmlld0JveD0iMCAwIDI2Mi4zNTEyMDA2MjU4MTQ4NCAyNDcuMiIgaGVpZ2h0PSIyNDcuMiIgd2lkdGg9IjI2Mi4zNTEyMDA2MjU4MTQ4NCI+PHBhdGggZD0iTTI2MS43MzcgNTMuMDJDMjYwLjUwNCAyNy4zNiAyNTYuOTg5IDIwLjIyNyAyNTYuOTg5IDIwLjIyNyAyNDYuMTk3LTYuMjAyIDIzMi43MjgtMC41MDYgMjIwLjYyOSAzLjI5MiAxOTkuMjY3IDMuNDQ2IDE3Ny45OTEgOS4wOTEgMTU2LjY3OSAxMi4xMTkgMTExLjk0NCAxMi41ODEgNjYuODI4IDQuOTg2IDIyLjMxNSAyMy43MTcgMTguMTM0IDI5LjQ2NC00LjMzOCAyNC44NDYgMC43NDQgNTYuMzA0IDIuMDc2IDY5LjM5IDYuOTM1IDgzLjkxMyA2Ljc4NyA5NS45MjIgNy40NTMgOTguMDI2IDguMzc4IDkzLjIwMiA4Ljc3MyA5Ni4yMyAxMC4xNTQgMTA0LjM5IDEyLjQxMSAxMDAuNTQxIDE0LjI2MSAxMDUuMzY1IDExLjY4NCAxMTguMjQ2IDEzLjUzNCAxMjguOTcxIDE1LjI5NyAxNDAuMjEgMTIuMTg5IDE0My4xMzUgOC4yMDYgMTQxLjc0OSA2LjQxNyAxNTEuNDQ5IDYuMjMyIDE1OC40NzkgNS4yMzMgMTU3LjE0NSA0LjEzNSAxNTYuODM3IDMuMzM0IDE1Ni42MzIgMS43MTggMTU3LjQwMiAxLjk4OSAxNTkuNjA4IDIuOTE0IDE2Ny4xNTItMS4wNTcgMTcxLjUxNCAxLjQzNCAxNzguOTA0LTAuMjggMTg2LjkxIDIuNjE4IDE5My44MzggMi4yMjQgMjAyLjUxMSAyLjE3NCAyMDQuMjU1IDIuNDQ2IDIwNS43NDQgMi44NzcgMjA2LjE1NCA0Ljc4OSAyMDguMzYxIDIuMDAyIDIxMi42NzIgMi4yOTggMjE3LjM0MiAyMS45MDggMjQ5LjI2MiA0My4xODQgMjI3LjE5NSA2My4yNzYgMjQxLjg3MiA2OC40OTMgMjMxLjYwOCA2NC41NzEgMjQ1LjUxNiA2Ni42NTUgMjQzLjM2IDY4LjI4MyAyNDAuODQ2IDY5LjQ2NyAyNTEuMjYzIDcxLjMwNSAyNDUuMzYyIDcxLjU4OCAyNDMuNjY4IDcxLjE1NyAyMzkuNjY1IDcyLjE2OCAyNDAuNDM1IDcyLjY5OCAyNDAuODQ2IDczLjE2NyAyNDAuNzQzIDczLjI0MSAyMzguMzgyIDczLjM1MiAyMzQuODQxIDcyLjM3OCAyMzcuMDQ4IDcyLjExOSAyMzUuMjAxIDc0LjkxOSAyMjUuODYxIDc0LjIyOCAyNDguMDgxIDc2Ljg1NSAyNDcuMTU4IDc2LjczMiAyNDQuNDM4IDc1Ljk2NyAyNDAuNTM4IDc3LjUzMyAyNDEuMDUxIDc5LjA4NyAyMzcuMTUxIDc5LjEzNyAyMzMuOTE4IDgwLjUxOCAyNDIuNjkzIDgwLjU2NyAyNDQuNTkyIDgwLjgxNCAyNDUuOTI2IDgxLjIwOSAyNDYuODUgODUuNTI2IDIzNy4zMDUgODkuODE4IDI1MC4yMzcgOTQuMzQ0IDI0NS45MjYgOTcuMTE5IDI0MS4yMDUgOTkuNzgzIDI0OC40OTIgMTAyLjU5NSAyNDYuNjk2IDEwMy41ODIgMjQ1LjI1OSAxMDQuNTgxIDI0Mi42OTMgMTA1LjUzMSAyNDcuMDA0IDExNy4xNjEgMjQ3LjkyOCAxMjkuNTU3IDI0NC4wNzkgMTQwLjU4MyAyNDcuMTU4IDE3MC4wNDggMjQxLjQxIDIwMS41MzYgMjQ5LjUxOCAyMzIuNjA1IDI0MS45MjMgMjM5LjkzMSAyMzguOTk4IDI0Ny41NDEgMjM0Ljg0MSAyNTQuNjgyIDIzMS41MDYgMjU0LjY4MiAyMzEuNTA2IDI2MC40NjcgMjIyLjM3MSAyNjAuNDY3IDE4MS4zMTZTMjYxLjcgMTQ1LjM5MyAyNjEuODg1IDExMi43MDNDMjYyLjA3IDgwLjAxMyAyNjIuOTMzIDc4LjY3OSAyNjEuNyA1My4wMloiIG9wYWNpdHk9IjEiIGZpbGw9IiNmM2E4M2MiIGRhdGEtZmlsbC1wYWxldHRlLWNvbG9yPSJ0ZXJ0aWFyeSI+PC9wYXRoPjxnIHRyYW5zZm9ybT0ibWF0cml4KDEsMCwwLDEsNTUuNzY4MzE5OTk5OTk5OTksMjYuMjMwNjY2NjY2NjY2NjY4KSI+PHN2ZyB3aWR0aD0iMTUwLjgxNDU2MDYyNTgxNDg2IiB2aWV3Qm94PSIwLjMwMDAwMDAxMTkyMDkyODk2IC0zNy41IDI5LjcwMDAwMDc2MjkzOTQ1MyAzOC4zNDk5OTg0NzQxMjEwOTQiIGhlaWdodD0iMTk0LjczODY2NjY2NjY2NjY2IiBkYXRhLXBhbGV0dGUtY29sb3I9IiNmZmZmZmYiPjxwYXRoIGQ9Ik0xNi0xOS4xNUwxMS45IDAgNC43IDAgMTEuNS0zMS44IDE4LjktMzIuOCAxNi41NS0yMS43IDE2Ljg1LTIxLjdRMTkuNjUtMjEuNyAyMS44NS0yNC4yNSAyNC4wNS0yNi44IDI0LjA1LTI5LjhMMjQuMDUtMjkuOFEyNC4wNS0zMi4zIDIyLjMzLTMzLjc1IDIwLjYtMzUuMiAxNy40NS0zNS4yTDE3LjQ1LTM1LjJRMTIuMi0zNS4yIDguNTgtMzEuODUgNC45NS0yOC41IDQuOTUtMjMuMDVMNC45NS0yMy4wNVE0Ljk1LTIyLjEgNS4wOC0yMS40IDUuMi0yMC43IDUuNS0yMC4wNUw1LjUtMjAuMDVRNS42LTE5Ljg1IDUuNjMtMTkuNzggNS42NS0xOS43IDUuNjUtMTkuNjVMNS42NS0xOS42NVEyLjk1LTE5LjY1IDEuNjMtMjAuOCAwLjMtMjEuOTUgMC4zLTI0LjI1TDAuMy0yNC4yNVEwLjMtMjYuOTUgMi4wMi0yOS41NSAzLjc1LTMyLjE1IDYuOC0zNC4xTDYuOC0zNC4xUTkuMy0zNS43NSAxMi4zMy0zNi42MyAxNS4zNS0zNy41IDE4LjQ1LTM3LjVMMTguNDUtMzcuNVEyMy4zNS0zNy41IDI2LjIzLTM1LjMgMjkuMS0zMy4xIDI5LjEtMjkuNTVMMjkuMS0yOS41NVEyOS4xLTI3LjIgMjcuNzUtMjUuMDUgMjYuNC0yMi45IDI0LjEtMjEuNkwyNC4xLTIxLjZRMjYuOTUtMjEuMDUgMjguNDgtMTguOTMgMzAtMTYuOCAzMC0xMy41NUwzMC0xMy41NVEzMC0xMS4yIDI5LjMtOC42IDI4LjYtNiAyNy4zNS00TDI3LjM1LTRRMjUuODUtMS42IDIzLjc1LTAuMzggMjEuNjUgMC44NSAxOS4wNSAwLjg1TDE5LjA1IDAuODVRMTYuNyAwLjg1IDE1LjQtMC4xIDE0LjEtMS4wNSAxNC4xLTIuODVMMTQuMS0yLjg1UTE0LjEtMy40NSAxNC4yNS00LjE3IDE0LjQtNC45IDE0Ljc1LTUuNzVMMTQuNzUtNS43NVExNS43LTQuOCAxNi40OC00LjM4IDE3LjI1LTMuOTUgMTguMS0zLjk1TDE4LjEtMy45NVEyMC4zNS0zLjk1IDIxLjctNi41NSAyMy4wNS05LjE1IDIzLjA1LTEyLjk1TDIzLjA1LTEyLjk1UTIzLjA1LTE2LjEgMjEuODUtMTcuNyAyMC42NS0xOS4zIDE4LjMtMTkuM0wxOC4zLTE5LjNRMTcuOTUtMTkuMyAxNy4yOC0xOS4yNSAxNi42LTE5LjIgMTYtMTkuMTVMMTYtMTkuMTVaIiBvcGFjaXR5PSIxIiB0cmFuc2Zvcm09Im1hdHJpeCgxLDAsMCwxLDAsMCkiIGZpbGw9IiNmZmZmZmYiIGNsYXNzPSJ1bmRlZmluZWQtdGV4dC0wIiBkYXRhLWZpbGwtcGFsZXR0ZS1jb2xvcj0icXVhdGVybmFyeSIgaWQ9InRleHQtMCI+PC9wYXRoPjwvc3ZnPjwvZz48L3N2Zz48L2c+PC9zdmc+PC9nPjwvc3ZnPjwvZz48Zz48L2c+PC9zdmc+PC9nPjwvc3ZnPjxyZWN0IHdpZHRoPSIyNjIuMzUxMjAwNjI1ODE0ODQiIGhlaWdodD0iMjQ3LjIiIGZpbGw9Im5vbmUiIHN0cm9rZT0ibm9uZSIgdmlzaWJpbGl0eT0iaGlkZGVuIj48L3JlY3Q+PC9nPjxkZWZzPjwvZGVmcz48L3N2Zz4= " alt="Logo">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Parceiros</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Ajude</a></li>
              <li><a href="#" class="nav-link px-2 text-white">SAC</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Sobre</a></li>
            </ul>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Pesquise..." aria-label="Search">
            </form>
            <div class="text-end">
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalCadastrar">
                Cadastre-se
              </button>
            </div>
            <div class="text-end ms-3">
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalLogin">
                Entrar
              </button>
            </div>
          </div>
        </div>
        <!-- Modal Cadastrar-->
    <div class="modal fade" id="modalCadastrar" tabindex="1000" aria-labelledby="modalCadastrarLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-secondary">Realize o seu cadastro agora!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="text-danger"><?= $nome_err ?? '' ?></p>
            <p class="text-danger"><?= $email_err ?? '' ?></p>
            <p class="text-danger"><?= $cep_err ?? '' ?></p>
            <p class="text-danger"><?= $uf_err ?? '' ?></p>
            <p class="text-danger"><?= $cpfCnpj_err ?? '' ?></p>
            <p class="text-danger"><?= $passw_err ?? '' ?></p>
            <p class="text-danger"><?= $verpassw_err ?? '' ?></p>
            <form class="row g-3 needs-validation" action="cadastro.php" method="post">
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label text-secondary">Nome Completo</label>

                <input type="text" name="input_nome" class="form-control"  value="" required>
                <div class="valid-feedback">
                  Sucesso!
                </div>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label text-secondary">Email <span class="text-muted">(Opcional)</span></label>
                <input type="email" name="input_email" class="form-control" placeholder="seuEmail@exemplo.com" required>
                <div class="invalid-feedback">
                  Por favor entre com um email para receber as novidades.
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom03" class="form-label text-secondary">CEP</label>
                <input type="text" name="input_cep" class="form-control" placeholder="xxxxx-xxx"  value="" required>
                <div class="invalid-feedback">
                  Por favor entre com um CEP v??lido.
                </div>
              </div>
              <div class="col-md-2">
                <label for="validationCustom04" class="form-label text-secondary">Estado</label>
                <input type="text" name="input_uf" class="form-control"  value="" required>
                <div class="invalid-feedback">
                  Por favor entre com um n??mero v??lido.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom05" class="form-label text-secondary">N??mero</label>
                <input type="text" name="input_numero" class="form-control"  value="" required>
                <div class="invalid-feedback">
                  Por favor entre com um n??mero v??lido.
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom06" class="form-label text-secondary">Complemento</label>
                <input type="text" name="input_complemento" class="form-control"  value="">
              </div>
              <div class="col-12">
                <label for="validationCustom06" class="form-label text-secondary">CPF/CNPJ</label>
                <input type="text" name="input_cpfCnpj" class="form-control"   value="" required>
                <div class="valid-feedback">
                  Sucesso!
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label text-secondary">Senha</label>
                <input type="password" name="input_passw" class="form-control"  value="" required>
                <div class="valid-feedback">
                  Sucesso!
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom01" class="form-label text-secondary">Confirma senha</label>
                <input type="password" name="input_verpassw" class="form-control"  value="" required>
                <div class="valid-feedback">
                  Sucesso!
                </div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label text-secondary" for="invalidCheck">
                    Aceitos todos os termos.
                  </label>
                  <div class="invalid-feedback">
                    Voc?? precisa aceitar para continuar.
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="btnSend" id="btnSend" value="Cadastrar ">
              </div>
            </form>
        </div>
      </div>
    </div>
    </div>
    <div class="modal fade" id="modalLogin" tabindex="1000" aria-labelledby="modalLoginLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-secondary">Fa??a o seu login!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form class="row g-3 needs-validation" action="login.php" method="post">
            <div class="col-md-12">
              <label for="validationCustom01" class="form-label text-secondary">Seu e-mail</label>
              <input type="text" name="email" class="form-control" id="validationCustom01" placeholder="seuEmail@exemplo.com" required>
              <div class="valid-feedback">
                Sucesso!
              </div>
            </div>
            <div class="col-md-12">
              <label for="password" class="form-label text-secondary">Senha</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="" required>
              <div class="invalid-feedback">
                Por favor entre com um email para receber as novidades.
              </div>
            </div>
        </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </header>
    <section class="row d-flex">
        <div class="col-7 bg-image" style="background-image: url('https://www.infoans.org/images/05-Galleria-Fotografica/RMG%20-%20Querida%20Amazzonia%20-%202020/14-AMAZZONIA-04.JPG'); background-repeat: no-repeat;">
            <div class="px-4 pt-5 my-5 text-center">
                <h1 class="display-4 fw-bold text-white">Ajude-nos ?? ajudar!</h1>
                <div class="col-lg-6 mx-auto">
                  <p class="lead mb-4 text-white">Voc?? tem o poder da mudan??a.
                    Doe agora e salve vidas.</p>
                  <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Doe agora!</button>
                  </div>
                </div>
                <div class="overflow-hidden" style="max-height: 30vh;">
                </div>
              </div>
        </div>
        <div class="col-5 mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-8">
                  <h4 class="mb-3">Informa????es Pessoais</h4>
                  <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label text-secondary">Nome</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Digite um nome v??lido.
                        </div>
                      </div>
          
                      <div class="col-sm-6">
                        <label for="lastName" class="form-label text-secondary">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Digite um sobrenome v??lido.
                        </div>
                      </div>
                    
                      <div class="col-12">
                        <label for="email" class="form-label text-secondary">Email <span class="text-muted">(Opcional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="seuEmail@exemplo.com">
                        <div class="invalid-feedback">
                          Por favor entre com um email para receber as novidades.
                        </div>
                      </div>
          
                      <div class="col-12">
                        <label for="address" class="form-label text-secondary">Telefone</label>
                        <input type="phone" class="form-control phone-mask" id="address" placeholder="0000-0000" required="">
                        <div class="invalid-feedback">
                          Please enter your shipping address.
                        </div>
                      </div>
                      <div class="col-12 form-check ms-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Aceito receber mensagens por WhatsApp.
                        </label>
                      </div>   
                      <hr class="my-4">
                    </div>
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Junte-se a n??s</button>
                  </form>
                </div>
            </div>
    </section>
    <section>
        <div class="container px-4 py-5" id="custom-cards">        
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-black bg-dark rounded-5 shadow-lg" style="background-image: url('https://voluntariadoempresarial.com.br/wp-content/uploads/2020/05/iStock-1202093022-730x410.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Seja diferente, doe.</h2>
                  </div>
                </div>
              </div>
        
              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-black bg-dark rounded-5 shadow-lg" style="background-image: url('https://www.sescooprs.coop.br/app/uploads/2020/04/20200424-coops-acoes-solidarias-2-730x440.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-black text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Quem ajuda, ama.</h2>
                    
                  </div>
                </div>
              </div>
        
              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-black bg-dark rounded-5 shadow-lg" style="background-image: url('https://institutopensi.org.br/wp-content/uploads/2020/06/shutterstock_1487364161-890x420.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Abrace uma causa, ajude.</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <footer>
        <div class="container">
            <footer class="py-5">
              <div class="row">
                <div class="col-2">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                  </ul>
                </div>
          
                <div class="col-2">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                  </ul>
                </div>
          
                <div class="col-2">
                  <h5>Section</h5>
                  <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                  </ul>
                </div>
          
                <div class="col-4 offset-1">
                  <form>
                    <h5>Subscreva para receber nossas novidades!</h5>
                    <div class="d-flex w-100 gap-2">
                      <label for="newsletter1" class="visually-hidden">Email address</label>
                      <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                      <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                  </form>
                </div>
              </div>
          
              <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>BarrigaCheia?? 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                  <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                  <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
              </div>
            </footer>
          </div>
    </footer>
    <script src="../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    
    
  </body>
</html>