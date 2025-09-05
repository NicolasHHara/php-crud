<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

?>
  <main>

    <div class="container">
        <h1>Lista de Cargos</h1>
        <a href="./salvar-cargos.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Teto Salárial</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
                $sql = 'SELECT * FROM cargos';   

                //EXECUTAR O SQL E GUARDAR O RETORNO
                $retorno = mysqli_query($conexao, $sql);
        
                //LISTAR TODOS OS DADOS
                while($linha = mysqli_fetch_assoc($retorno) ){
                                
                  echo '
                  <td>'.$linha['CargoID'].'</td>
                  <td>'.$linha['Nome'].'</td>
                  <td>'.$linha['TetoSalarial'].'</td>
                  <td>
                    <a href="salvar-cargos.php?id=" class="btn btn-edit">Editar</a>
                    <a href="#" class="btn btn-delete">Excluir</a>
                  </td>
                  </tr>
                  ';
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