<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $datainicio = date("y:m:d h:i:s");
    $dataultima = date("y:m:d h:i:s");
    $senha=$_POST['senha'];
    $situacoe_id=$_POST['situacoe_id'];
    $niveis_acesso_id=$_POST['niveis_acesso_id'];


$result_cadastro = "INSERT INTO usuarios (nome, email, created, modified, senha, 
situacoe_id, niveis_acesso_id) VALUES ('$nome', '$email', '$datainicio','$dataultima', 
'$senha', '$situacoe_id', '$niveis_acesso_id')";    

$resultado_cadastro = mysqli_query($conn, $result_cadastro);
$ultimo_id = mysqli_insert_id($conn);

echo "ID: $ultimo_id <br>";


?>
