<?php
$server = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'bdcliente';

$conn = mysqli_connect($server, $user, $pass, $db);

$nome= filter_input(INPUT_POST, 'Nome',FILTER_SANITIZE_STRING);
$sexo= filter_input(INPUT_POST, 'Sexo',FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'Email',FILTER_SANITIZE_EMAIL);
$telefone= filter_input(INPUT_POST, 'Telefone',FILTER_SANITIZE_STRING);
$cpf= filter_input(INPUT_POST, 'Cpf',FILTER_SANITIZE_STRING);
$nascimento= filter_input(INPUT_POST, 'Nascimento',FILTER_SANITIZE_STRING);

$endereco= filter_input(INPUT_POST, 'Endereco',FILTER_SANITIZE_STRING);
$numero= filter_input(INPUT_POST, 'Numero',FILTER_SANITIZE_STRING);
$cidade= filter_input(INPUT_POST, 'Cidade',FILTER_SANITIZE_STRING);
$estado= filter_input(INPUT_POST, 'Estado',FILTER_SANITIZE_STRING);





$resultado_usuario= "INSERT INTO cliente (Nome,Sexo,Email,Telefone,Cpf, Nascimento ) VALUES ('$nome','$sexo,'$email','$telefone','$cpf' ,''$nascimento')"; 
$sql_usuario = mysqli_query( $conn, $resultado_usuario);

$resultado_endereco= "INSERT INTO endereco (Endereco,Numero,Cidade,Estado ) VALUES ('$endereco','$numero,'$cidade','$testado')"; 
$sql_usuario = mysqli_query( $conn, $resultado_endereco);
if(mysqli_query($conn,$resultado_usuario)) {
echo("Cadastro realizado com sucesso!");

}else{
    echo("Ocorreu um erro na hora de cadastrar o usuário");
}
mysqli_close($conn);
?>
