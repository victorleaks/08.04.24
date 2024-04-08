<?php
require_once("./conexao.php");

$txtNomeProjetos = $_POST['txtNomeProjetos'];
$txtDescricaoProjetos = $_POST['txtDescricaoProjetos'];

$str_sql_cadastrar_Projeto= "insert into `projetos` (`nome`,`descricao`) values ('$txtNomeProjeto','$txtDescricaoProjeto'); ";

try{
    $cadastrar_Projeto = mysqli_query($conexao, $str_sql_cadastrar_Projeto);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idProjeto']= $ultimo_id;
    die('idProjeto' . $_SESSION['idProjeto']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Projeto);
}
?>