<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">  
    <title>Cadastro</title>
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
              <li><a class="dropdown-item" href="../login prestador/indexLoginP.html">Login Profissional</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../configurações/index.html">Configuração</a>
          </li>
        </p>
        </ul>
      </div>
    <div class="container">
        <form id="form" class="form" method="post" action="cadastro.php"> 
          <h1>Faça seu cadastro</h1>
          <p>
            <label id="nome" name="Nome_Cliente">Nome: </label><input name="Nome_Cliente" type="text" placeholder="Digite seu nome" class="inputs required" oninput="nameValidate()">
            <span class="span-required">Nome deve ter no mínimo 3 caracteres</span> 
         </p>
        <div>
            <p id="emailP" name="Email_Cliente">Email: <input name="Email_Cliente" id='email0' type="email" placeholder="Digite seu email" class="inputs required" oninput="emailValidate()"></p>
            <span class="span-required">Digite um email válido</span> 
        </div>
        <div>   
            <p id="senhaP" name="Senha_Cliente">Senha: <input name="Senha_Cliente" type="password" placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()"></p>
            <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
        </div>
        <div >
            <p style="text-align:center"><label class="w3-text-IE"><b>Minha Imagem para Identificação: </b></label></p>
            <p  style="text-align:center"><img class="container-img" id="imagemSelecionada" src="../imagem/pessoa_ezservice.jpg"   /></p>
            <p style="text-align:center"><label class="w3-btn w3-theme">Selecione uma Imagem 
                <input type="hidden" name="MAX_FILE_SIZE" value="16777215" />
                <input type="file" id="imagem" name="imagem" accept="imagem/*" onchange="validaImagem(this);"></label>
            </p>
      </div>

        <div>
            <p id="senha_checkP" name="Senha_Cliente">Confirme sua senha: <input name="Senha_Cliente" type="password" placeholder="Repita a sua senha" class="inputs required" oninput="comparePassword()"></p>
            <span class="span-required">Senhas devem ser compatíveis</span>
        </div>  
        <div>
            <p id="pcpf" name="CPF_Cliente">Insira seu cpf: <input name="CPF_Cliente" type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" class="inputs required" placeholder="Cpf com pontos e traços" oninput="cpfValidate()"></p>
            <span class="span-required">Digite um cpf válido</span>
        </div>
        <div>
            <p id="Ptelefone" name="Celular_Cliente">Insira seu celular: <input name="Celular_Cliente" type="text" id="telefone" name="telefone" class="inputs required" placeholder="(**)*****-****" pattern="[0-9]{2}[0-9]{9}" oninput="celValidate()"></p>
            <span class="span-required">Digite um número válido</span>
        </div>
        <div class="endereco">
            <p id="nome" name="Endereco_Cliente">Endereço (Rua/Nº): </p><input name="Endereco_Cliente" type="text" placeholder="Digite seu endereço" class="inputs required"></p>
            <p id="nome" name="CEP_Cliente">Cep: </p><input name="CEP_Cliente" type="text" placeholder="Digite seu Cep" class="inputs required" pattern="[0-9]{2}[0-9]{3}[0-9]{3}" oninput="cepValidate()"></p>
            <span class="span-required">Insira um CEP válido</span> 
        </div>
            <input type="submit" id="submit" value="Realizar cadastro"  class="confirm" name="enviar">
</form>
        <img class="img_trabalhador"src="https://imagensemoldes.com.br/wp-content/uploads/2022/02/Gravata-Desenho-Animado-Homem-de-Negocios-PNG.png" alt="">
    </div>
    <script>
        const form   = document.getElementById('form');
        const campos = document.querySelectorAll('.required');
        const spans  = document.querySelectorAll('.span-required');
        const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            nameValidate();
            emailValidate();
            mainPasswordValidate();
            comparePassword();
        });
    
        function setError(index){
            campos[index].style.border = '2px solid #e63636';
            campos[index].style.boxShadow = '0px 5px 20px -6px #720909';
            spans[index].style.display = 'block';
        }
    
        function removeError(index){
            campos[index].style.border = '';
            campos[index].style.boxShadow = '';
    
            spans[index].style.display = 'none';
        }
    
        function nameValidate(){
            if(campos[0].value.length < 3)
            {
                setError(0);
            }
            else
            {
                removeError(0);
            }
        }
    
        function emailValidate(){
            if(!emailRegex.test(campos[1].value))
            {
                setError(1);
            }
            else
            {
                removeError(1);
            }
        }
    
        function mainPasswordValidate(){
            if(campos[2].value.length < 8)
            {
                setError(2);
            }
            else
            {
                removeError(2);
                comparePassword();
            }
        }
    
        function comparePassword(){
            if(campos[2].value == campos[3].value && campos[3].value.length >= 8)
            {
                removeError(3);
            }
            else
            {
                setError(3);
            }
        }
        function cpfValidate(){
            if((!campos[4].checkValidity()))
            {
                setError(4);
            }
            else
            {
                removeError(4);
            }
        }

        function celValidate(){
            if((!campos[5].checkValidity()))
            {
                setError(5);
            }
            else
            {
                removeError(5);
            }
        }
        function cepValidate(){
            if((!campos[7].checkValidity()))
            {
                setError(7);
            }
            else
            {
                removeError(7);
            }

        form.addEventListener('submit', (event) => {
        event.preventDefault(); 
        window.location.href = '../login/indexLogin.html';
});
        }
        
    
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
<script>
function validaImagem(input) {
  var caminho = input.value;

  if (caminho) {
      var comecoCaminho = (caminho.indexOf('\\') >= 0 ? caminho.lastIndexOf('\\') : caminho.lastIndexOf('/'));
      var nomeArquivo = caminho.substring(comecoCaminho);

      if (nomeArquivo.indexOf('\\') === 0 || nomeArquivo.indexOf('/') === 0) {
          nomeArquivo = nomeArquivo.substring(1);
      }

      var extensaoArquivo = nomeArquivo.indexOf('.') < 1 ? '' : nomeArquivo.split('.').pop();

      if (extensaoArquivo != 'gif' &&
          extensaoArquivo != 'png' &&
          extensaoArquivo != 'jpg' &&
          extensaoArquivo != 'jpeg') {
          input.value = '';
          alert("É preciso selecionar um arquivo de imagem (gif, png, jpg ou jpeg)");
      }
  } else {
      input.value = '';
      alert("Selecione um caminho de arquivo válido");
  }
  if (input.files && input.files[0]) {
      var arquivoTam = input.files[0].size / 960 / 960;
      if (arquivoTam < 16) {
          var reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('imagemSelecionada').setAttribute('src', e.target.result);
          };
          reader.readAsDataURL(input.files[0]);
      } else {
          input.value = '';
          alert("O arquivo precisa ser uma imagem com menos de 16 MB");
      }
  } else{
      document.getElementById('imagemSelecionada').setAttribute('src', '#');
  }
}
</script>

    
</body>
</html>