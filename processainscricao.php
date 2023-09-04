<?php
    include_once("conexao.php");
    $1SIM= $_POST['1SIM'];
    $2NAO = $_POST['2NAO'];
    $3SIM = $_POST['3SIM'];
    $4NAO= $_POST['4NAO'];
    $5SIM = $_POST['5SIM'];
    $6NAO = $_POST['6NAO'];
    $7SIM = $_POST['7SIM'];
    $8NAO = $_POST['8NAO'];
    $9SIM = $_POST['9SIM'];
    $10NAO = $_POST['10NAO'];
    $11SIM = $_POST['11SIM'];
    $12NAO = $_POST['12NAO'];
    $TALVEZ= $_POST['TALVEZ'];
    $SOLTIRO = $_POST['SOLTEIRO']; 
    $CASADO = $_POST['CASADO'];
    $VIÚVA= $_POST['VIÚVA'];


$result_cadastro = "INSERT INTO usuarios (1SIM, 2NAO,3SIM,4NAO,5SIM,6NAO, 7SIM, 8NAO, 9SIM, 10NAO, 11SIM, 12NAO, TALVEZ, SOLTEIRO, CASADO, VIÚVA) 
VALUES ('$1SIM', '$2NAO','$3SIM','$4NAO','$5SIM','$6NAO', '$7SIM', '$8NAO', '$9SIM', '$10NAO', '$11SIM', '$12NAO', '$TALVEZ', '$SOLTEIRO', '$CASADO', '$VIÚVA' )";    

$resultado_cadastro = mysqli_query($conn, $result_cadastro);
$ultimo_id = mysqli_insert_id($conn);

echo "ID: $ultimo_id <br>";


?>
