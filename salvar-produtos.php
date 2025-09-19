<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$id = $_GET['id'];

$sql = "SELECT *  FROM produtos WHERE ProdutoID = $id";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($resultado);
?>
  
  <main>

    <div id="produtos" class="tela">
        <form class="crud-form" action="" method="post">
          <h2>Cadastro de Produtos</h2>
          <input type="text" placeholder="Nome do Produto" value="<?php echo $linha['Nome'];?>">
          <input type="number" placeholder="Preço" value="<?php echo $linha['Preco'];?>">
          <input type="number" placeholder="Peso (g)" value="<?php echo $linha['Peso'];?>">
          <textarea placeholder="Descrição"><?php echo $linha['Descricao'];?></textarea>
          <select>

            <?php
              $sql = 'SELECT Nome FROM setor';   

              $retorno = mysqli_query($conexao, $sql);
              
              while($linha = mysqli_fetch_assoc($retorno)){ 
                  echo '<option value="">'.$linha['Nome'].'</option>';
              }
            ?>
          </select>
          <button type="submit">Salvar</button>
        </form>
      </div>

 
   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>