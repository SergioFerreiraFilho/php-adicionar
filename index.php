<?php
include("config.php");
include("add.php");
$consulta = "SELECT * FROM store.alunos";
$resultado = $conexao -> query($consulta);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div>
    <h1>Alunos</h1>
    <hr>
    <a class="btn btn-dark mb-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Adicionar Aluno
</a>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
          <div>
            <form method="post">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Nome" name="nome">

                <input class="form-control form-control-lg mb-3" type="text" placeholder="Cidade" name="cidade">

                <input class="form-control form-control-lg mb-3" type="text" placeholder="Matricula" name="matricula">
                <div class="d-grid"><Button type="submit" class="btn btn-primary" name="adicionar">Adicionar</Button></div>
            </form>
          </div>
        </div>
      </div>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Matricula</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($resultado as $aluno) {
                echo "<tr>
                <td>{$aluno['nome']}</td>
                <td>{$aluno['cidade']}</td>
                <td>{$aluno['matricula']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>