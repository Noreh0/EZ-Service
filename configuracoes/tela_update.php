<!DOCTYPE html>
<html lang="en">
<head>
    <?php
            $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $database = "EZservice";

            $conn = mysqli_connect($servername, $username, $password, $database);
          
            if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
              } 
        session_start();
      
        $email = $_SESSION['Email_Cliente'];
        echo $email;
      

      ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
    .container-img{
      border-radius: 50%;
      max-width: 50px;
      max-height: 50px
    }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="p-3 mb-2 bg-warning text-dark">
        <ul class="nav nav-tabs">
          <p class="text-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="./projeto_1.html">Menu Inicial</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Serviços</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../eletricista/trabalho_eletricista.html">Eletricista</a></li>
              <li><a class="dropdown-item" href="../encanador/trabalho_encanador.html">Encanador</a></li>
              <li><a class="dropdown-item" href="../encanador_de_gas/trabalho_encanador_de_gas.html">Encanador de Gás</a></li>
              <li><a class="dropdown-item" href="../jardinagem/trabalho_jardineiro.html">Jardinagem</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cadastro</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../cadastro/index.html">Cadastro Cliente</a></li>
              <li><a class="dropdown-item" href="../cadastro prestador/indexP.html">Cadastro Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../login/indexLogin.html">Login Cliente</a></li>
              <li><a class="dropdown-item" href="../login prestador/indexLoginP.html">Login Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Configuração</a>
          </li>
          </p>
        </ul>
      </div>
</body>
	<h1 class="text-center">Informações do usuario  </h1>

  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h2>Tabela de Clientes</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>CPF</th>
      <th>Celular</th>
      <th>CEP</th>
      <th>Senha</th>
      <th>Endereço</th>
      <th>Imagem</th>
    </tr>

    <?php
  $consulta = "SELECT * FROM Cliente WHERE Email_Cliente = '$email'";
  $resultado = mysqli_query($conn, $consulta);

  while ($linha = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$linha['ID_Cliente']."</td>";
    echo "<td>".$linha['Nome_Cliente']."</td>";
    echo "<td>".$linha['Email_Cliente']."</td>";
    echo "<td>".$linha['CPF_Cliente']."</td>";
    echo "<td>".$linha['Celular_Cliente']."</td>";
    echo "<td>".$linha['CEP_Cliente']."</td>";
    echo "<td>".$linha['Senha_Cliente']."</td>";
    echo "<td>".$linha['Endereco_Cliente']."</td>";
    if ($linha['imagem']) {?>
      <td>
          <img id="imagem" class="container-img" src="../imagem/O_boto.png"/>
      </td>
      <?php
  } else {
      ?>
      <td>
          <img id="imagem" class="container-img" src="../imagem/pessoa_ezservice.png" />
  </td> 
      <?php
  
  }
    echo "</tr>";
  };

  mysqli_free_result($resultado);

  mysqli_close($conn);
?>

</table>
</body>
</html>

