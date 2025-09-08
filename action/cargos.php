<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

// captura a acao dos dados
$acao = $_GET['acao'];
$id = $_GET['id'];

// validacao
switch ($acao) {
    case 'excluir':

        //montar o Sql
        $sql = 'DELETE FROM cargos WHERE CargoID = '.$id;
        //Executar o Sql
        mysqli_query($conexao, $sql);
        //redirecionar
        header('Location: ../lista-cargos.php');
        break;
    
    default:
        # code...
        break;
}
?>