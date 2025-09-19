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
        $sql = 'DELETE FROM setor WHERE SetorID = '.$id;
        //Executar o Sql
        mysqli_query($conexao, $sql);
        //redirecionar
        header('Location: ../lista-setores.php');
        break;
    
    default:
        # code...
        break;
}
?>