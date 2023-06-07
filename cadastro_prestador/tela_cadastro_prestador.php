<?php
global $servername ;
global $username;
global $password;
global $database;

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

session_start();
$email = $_SESSION['Email_Prestador'];
echo "Bem vindo $email"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) { 
  die("Conexão falho: " . mysqli_connect_error());
}

$nome = $conn ->real_escape_string($_POST['Nome_Prestador']);
$email = $conn ->real_escape_string($_POST['Email_Prestador']);
$mdsenha = $conn ->real_escape_string($_POST['Senha_Prestador']);
$cpf = $conn ->real_escape_string($_POST['CPF_Prestador']);
$celular = $conn ->real_escape_string($_POST['Celular_Prestador']);
$enderco = $conn ->real_escape_string($_POST['Endereco_Prestador']);
$cep = $conn ->real_escape_string($_POST['CEP_Prestador']);

$sql = "INSERT INTO Prestador (Nome_Prestador, Email_Prestador, Senha_Prestador, CPF_Prestador, Celular_Prestador, Endereco_Prestador, CEP_Prestador)
VALUES ('$nome', '$email', '$cpf', '$celular', '$cep', '$md5senha', '$endereco')";
/*

if(isset($_POST['Email_Prestador'])){
  $sql2 = mysqli_query($conn, "SELECT* FROM Prestador WHERE Email_Cliente = '{$email}'") or print mysqli_error();

  if(mysqli_num_rows($sql2)>0) {
    echo json_encode(array('Email_Prestador' => 'Ja existe um usuario cadastrado com esse email'));
  } else {
    if (mysqli_query($conn, $sql)) {
      $msg = "Registro feito com sucesso!";
      $_SESSION['mensagem'] = $msg;
      header('location: /EZ-Services/login_prestador/login_prestador.php');
      exit();
    } else {
      echo "Erro ao inserir registro: " . mysqli_error($conn);
    }
    echo json_encode(array('Email_Prestador' => 'Usuario valido' ));
  }
}*/
mysqli_close($conn);
?>