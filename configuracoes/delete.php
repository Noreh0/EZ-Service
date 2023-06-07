<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database);

session_start();

if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}

if (isset($_POST['Email_Cliente'])) {
  $id = intval(filter_var($_POST['Email_Cliente'], FILTER_VALIDATE_INT));

  if ($id <= 0) {
    die("ID inválido!");
  }

  $sql = "DELETE FROM Cliente WHERE Email_Cliente = $id";

  if (mysqli_query($conn, $sql)) {
    echo "Registro excluído com sucesso!";
  } else {
    echo "Erro ao excluir registro: " . mysqli_error($conn);
  }

  mysqli_close($conn);
}
?>