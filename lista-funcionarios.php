<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

<main>

  <div class="container">
      <h1>Lista de Funcionários</h1>
      <a href="./salvar-funcionarios.php" class="btn btn-add">Incluir</a> 
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $sql = "SELECT f.FuncionarioID, f.Nome AS FuncionarioNome, f.SetorID, 
                c.CargoID, c.Nome AS CargoNome
          FROM funcionarios f
          INNER JOIN cargos c ON f.CargoID = c.CargoID";

          // executar a query
          $retorno = mysqli_query($conexao, $sql);

          // listar os dados
          while($linha = mysqli_fetch_assoc($retorno)) { 
            echo '
              <tr>
                <td>'.$linha['CargoID'].'</td>
                <td>'.$linha['FuncionarioNome'].'</td>
                <td>'.$linha['CargoNome'].'</td>
                <td>'.$linha['SetorID'].'</td>
                <td>
                  <a href="salvar-funcionarios.php?id='.$linha['FuncionarioID'].'" class="btn btn-edit">Editar</a>
                 <a href="./action/funcionarios.php?acao=excluir&id='.$linha['FuncionarioID'].'" class="btn btn-delete">Excluir</a>
                </td>
              </tr>';
          }
        ?>       
          </tbody>
      </table>
    </div>

<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>