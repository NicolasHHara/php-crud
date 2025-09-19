<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a> 
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>Nome Cliente</th>
              <th>Data</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT p.Nome AS ProdutoNome, c.Nome AS ClienteNome, pr.ProducaoID, pr.DataProducao
              FROM producao AS pr
              INNER JOIN produtos AS p ON p.ProdutoID = pr.ProdutoID
              INNER JOIN clientes AS c ON c.ClienteID = pr.ClienteID;
";

            // EXECUTAR O SQL E GUARDAR O RETORNO
            $retorno = mysqli_query($conexao, $sql);

            // LISTAR TODOS OS DADOS
            while($linha = mysqli_fetch_assoc($retorno)){ 
            echo '
              <tr>
                <td>'.$linha['ProducaoID'].'</td>
                <td>'.$linha['ProdutoNome'].'</td>
                <td>'.$linha['ClienteNome'].'</td>
                <td>'.$linha['DataProducao'].'</td>
                <td>
                  <a href="salvar-producao.php?id='.$linha['ProducaoID'].'" class="btn btn-edit">Editar</a>
                  <a href="./action/producao.php?acao=excluir&id='.$linha['ProducaoID'].'" class="btn btn-delete">Excluir</a>
                </td>
              </tr>';
            }
            ?>

            
          </tbody>
        </table>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>