<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) { 
  die("Conexão falho: " . mysqli_connect_error());
}

$nome = $conn ->real_escape_string($_POST['Nome_Cliente']);
$email = $conn ->real_escape_string($_POST['Email_Cliente']);
$md5senha = $conn ->real_escape_string(md5($_POST['Senha_Cliente']));
$cpf = $conn ->real_escape_string($_POST['CPF_Cliente']);
$celular = $conn ->real_escape_string($_POST['Celular_Cliente']);
$endereco = $conn ->real_escape_string($_POST['Endereco_Cliente']);
$cep = $conn ->real_escape_string($_POST['CEP_Cliente']);
$imagem = $conn ->real_escape_string($_POST['imagem']);

$sql = "INSERT INTO Cliente (Nome_Cliente, Email_Cliente, CPF_Cliente, Celular_Cliente, CEP_Cliente, Senha_Cliente, Endereco_Cliente, imagem)
VALUES ('$nome', '$email', '$cpf', '$celular', '$cep', '$md5senha', '$endereco', '$imagem')";
/*
if (mysqli_query($conn, $sql)) {
  $msg = "Registro feito com sucesso!";
  $_SESSION['mensagem'] = $msg;
  header('location: /EZ-Services/login/indexLogin.php');
  exit();

  } else {
    echo "Erro ao inserir registro: " . mysqli_error($conn);
}
/
if(isset($_POST['Email_Cliente'])){ 

 
  $sql2 = mysqli_query($conn, "SELECT FROM Cliente WHERE Email_Cliente = '{$email}'") or print mysql_error();


  if(mysqli_num_rows($sql2)>0) {
      echo json_encode(array('Email_Cliente' => 'Ja existe um usuario cadastrado com este email')); 
  }
  else {
      if (mysqli_query($conn, $sql)) {
  $msg = "Registro feito com sucesso!";
  $_SESSION['mensagem'] = $msg;
  header('location: /EZ-Services/login/indexLogin.php');
  exit();


  } else {
    echo "Erro ao inserir registro: " . mysqli_error($conn);
    }
      echo json_encode(array('Email_Cliente' => 'Usuário valido.' )); 
  }
}
mysqli_close($conn);
?>
