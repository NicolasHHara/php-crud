<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div class="container">
        <h1>Lista de Categorias</h1>
        <a href="./salvar-categorias.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          <?php
              $sql = 'SELECT * FROM categorias';   

              //EXECUTAR O SQL E GUARDAR O RETORNO
              $retorno = mysqli_query($conexao, $sql);
      
              //LISTAR TODOS OS DADOS
              while($linha = mysqli_fetch_assoc($retorno) ){ 
                echo '
                <tr>
                <td>'.$linha['CategoriaID'].'</td>
                <td>'.$linha['Nome'].'</td>
                <td>
                  <a href="salvar-cargos.php?id=" class="btn btn-edit">Editar</a>
                  <a href="./action/categorias.php?acao=excluir&id='.$linha['CategoriaID'].'" class="btn btn-delete">Excluir</a>
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