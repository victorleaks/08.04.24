<?php
require_once("./conexao.php");

$txtNomeJustificativa = $_POST['txtNomeJustificativa'];
$txtDescricaoJustificativa = $_POST['txtDescricaoJustificativa'];

$str_sql_cadastrar_Justificativa= "insert into `justificativas` (`nome`,`descricao`) values ('$txtNomeJustificativa','$txtDescricaoJustificativa'); ";

try{
    $cadastrar_Justificativa = mysqli_query($conexao, $str_sql_cadastrar_Justificativa);
    $ultimo_id = $conexao->insert_id;
    $_SESSION['idJustificativa']= $ultimo_id;
    die('idJustificativa' . $_SESSION['idJustificativa']);
} catch (Exception) {
    die('Não foi possível cadastrar o benefício str sql: ' . $str_sql_cadastrar_Justificativa);
}
?>