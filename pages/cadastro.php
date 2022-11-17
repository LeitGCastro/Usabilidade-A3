<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro - mm produtos</title>

  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/components/header.css">
  <link rel="stylesheet" href="../assets/css/components/colors.css">
  <link rel="stylesheet" href="../assets/css/cadastro.css">
</head>
<body>
  <Header>
    <div class="logo">
      <a href="#"><p>MM Watch Store</p></a>
    </div>

    <nav>
      <ul class="navbar">
        <li><a href="#home" class="active">Home</a></li>
        <li><a href="#shop">Shop</a></li>
        <li><a href="">Login / Cadastro</a></li>
        <li><a href="./pages/carrinho.html"><i class="fa fa-cart-shopping"></i></a></li>
      </ul>
    </nav>
  </Header>

  <main class="container flex flex--coluna flex--centro">
    <section class="cartao">
        <form action="./cadastro_concluido.html" class="formulario flex flex--coluna">
          <div class="input-container">
              <input name="nome" id="nome" class="input" type="text" placeholder="Nome" data-tipo="nome" required>
              <label class="input-label" for="nome">Nome</label>
          </div>
          <div class="input-container">
              <input name="email" id="email" class="input" type="email" placeholder="Email" data-tipo="email" required>
              <label class="input-label" for="email">Email</label>
          </div>
          <div class="input-container">
              <input name="senha" id="senha" class="input" type="password" placeholder="Senha" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?!.*[ !@#$%^&*_=+-]).{6,12}$" title="A senha deve conter entre 6 a 12 caracteres, deve conter pelo menos uma letra maiúscula, um número e não deve conter símbolos." data-tipo="senha" required>
              <label class="input-label" for="senha">Senha</label>
          </div>
          <div class="input-container">
              <input name="cep" id="cep" class="input" type="text" placeholder="CEP" pattern="[\d]{5}-?[\d]{3}" data-tipo="cep" required>
              <label class="input-label" for="cep">CEP</label>
          </div>
          <div class="input-container">
              <input name="logradouro" id="logradouro" class="input" type="text" placeholder="Logradouro" data-tipo="logradouro" required>
              <label class="input-label" for="logradouro">Logradouro</label>
          </div>
          <div class="input-container">
              <input name="cidade" id="cidade" class="input" type="text" placeholder="Cidade" data-tipo="cidade" required>
              <label class="input-label" for="cidade">Cidade</label>
          </div>
          <div class="input-container">
              <input name="estado" id="estado" class="input" type="text" placeholder="Estado" data-tipo="estado" required>
              <label class="input-label" for="estado">Estado</label>
          </div>
            <button class="botao">Cadastrar</a>
        </form>
    </section>
</main>
</body>
<script src="../js/cadastro.js" type="module"></script>
</html>