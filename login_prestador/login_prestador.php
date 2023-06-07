<?php
global $servername ;
global $username;
global $password;
global $database;

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database);

session_start();
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["Email_Prestador"]) && isset($_POST["Senha_Prestador"])) {

    $email = mysqli_real_escape_string($conn, $_POST["Email_Prestador"]);
    $md5senha = mysqli_real_escape_string($conn, $_POST["Senha_Prestador"]);
  
    $sql = "SELECT * FROM Prestador WHERE Email_Prestador = '$email' AND Senha_Prestador = md5('$md5senha')";
  
    $result = mysqli_query($conn, $sql);
  
    if ($result) {
  
      if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_assoc();
        $_SESSION ['Email_Prestador'] = $email;
        header('location: /EZ-Services/configuracoes/index.php');
      }
          else {
            echo "algo deu errado";
          }
          
        /*
        $cliente = mysqli_fetch_assoc($result);
        
        if (password_verify($cliente["Senha_Cliente"], $md5senha)) {
  
          $_SESSION["Email_Cliente"] = $email["Email_Cliente"];

          header("location: /EZ-Services/configurações/index.php");
          exit();
  
        } else {
          echo "Incorrect password.";
        }
        *//*
      } else {
        echo "User not found.";
      }
      */
    } else {
      echo "Query failed: " . mysqli_error($conn);
    }
  }

mysqli_close($conn);
?>