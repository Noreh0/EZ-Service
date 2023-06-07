<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="p-3 mb-2 bg-warning text-dark">
        <ul class="nav nav-tabs">
          <p class="text-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../tela_inicio/projeto_1.html">Menu Inicial</a>
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
              <li><a class="dropdown-item" href="../cadastro_prestador/indexP.html">Cadastro Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="..//login/indexLogin.html">Login Cliente</a></li>
              <li><a class="dropdown-item" href="../login_prestador/indexLoginP.html">Login Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../configurações/index.html">configurações</a>
          </li>
          </p>
        </ul>
      </div>
<div id="form" class="container"></div>
  <form id="form" class="form" method="post" action="login.php"> 
        <h1>Faça seu login</h1>
          <p id="Email_Cliente" name="Email_Cliente">Email: <input type="email" placeholder="Digite seu Email"
             name="Email_Cliente" required> </p>   
          <p id="Senha_Cliente" name=" Senha_Cliente">Senha: <input type="password" placeholder="Digite sua Senha"
        name="Senha_Cliente" required> </p> 
    <input type="submit" id="submit" class="login" value="Login" onclick="">
</form>
        <div class="link">
            <p>Não possui uma conta? <a href="index.html" class="link0">Cadastre-se aqui!</a></p> 
        </div> 
        
    </form>
</div>
<script>
form.addEventListener('submit', (event) => {
    event.preventDefault(); 
    window.location.href = '../tela_inicio/projeto_1.html';
});
</script>
<script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
    <script type="importmap">{
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/esm/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.esm.min.js"
      }
    }
    </script>
    <script type="module">
      import * as bootstrap from 'bootstrap'

      new bootstrap.Popover(document.getElementById('popoverButton'))
    </script>
  
</body>
</html>