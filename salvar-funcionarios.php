<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

  
  <main>

    <div id="funcionarios" class="tela">
        <form class="crud-form">
          <h2>Cadastro de Funcionários</h2>
          <input type="text" placeholder="Nome">
          <input type="date" placeholder="Data de Nascimento">
          <input type="email" placeholder="Email">
          <input type="number" placeholder="Salário">
          <select>
            <option value="">Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
          <input type="text" placeholder="CPF">
          <input type="text" placeholder="RG">
          <select>
            <option value="">Cargo</option>
            <?php?>
          </select>
          //$sql = 'SELECT c.Nome AS CargoNome, s.Nome 
              FROM setor AS s
              INNER JOIN cargo AS c ON s.SetorID = c.SetorID';   

          <select>
            <option value="">- Selecione - </option>
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
