<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$id = $_GET['id'];
$sql = "SELECT * FROM funcionarios WHERE FuncionarioID = $id";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($resultado);
?>

  
  <main>

    <div id="funcionarios" class="tela">
        <form class="crud-form">
          <h2>Cadastro de Funcionários</h2>
          <input type="text" placeholder="Nome" value ="<?php echo $linha['Nome']?>">
          <input type="date" placeholder="Data de Nascimento" value ="<?php echo $linha['DataNascimento']?>">
          <input type="email" placeholder="Email" value ="<?php echo $linha['Email']?>">
          <input type="number" placeholder="Salário" value ="<?php echo $linha['Salario']?>">
          <select>
            <option value="">Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
          <input type="text" placeholder="CPF">
          <input type="text" placeholder="RG">
          <select>
            <option value="">Cargos</option>
            <?php
              $sql = 'SELECT Nome FROM cargos';   

              $retorno = mysqli_query($conexao, $sql);
              
              while($linha = mysqli_fetch_assoc($retorno)){ 
                  echo '<option value="">'.$linha['Nome'].'</option>';
              }
            ?>
          </select>
            <select>
            <option value="">Setor</option>
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
