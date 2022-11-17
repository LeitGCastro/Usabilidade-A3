<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho</title>
  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/carrinho.css">
  <link rel="stylesheet" href="../assets/css/components/colors.css">
  <link rel="stylesheet" href="../assets/css/components/header.css">
</head>
<body>
  <!--Header Starts--> 
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
  <!--Header ends -->
  <main class="page">
    <table>
      <thead>
        <td class="thead">remover</td>
        <td class="thead">imagem</td>
        <td class="thead">produto</td>
        <td class="thead">Preço</td>
        <td class="thead">Quantidade</td>
        <td class="thead">total</td>
      </thead>
      <tr>
        <td><button class="btn"><i class="fa-sharp fa-solid fa-circle-xmark gold"></i></button></td>
        <td><img src="../assets/images/watch.png" class="image" alt="" srcset=""></td>
        <td><span>relógio de couro</span></td>
        <td><span>1000,00</span></td>
        <td><input type="number" name="" id=""></td>
        <td><span>1000,00</span></td>
      </tr>
    </table>
  </main>
</body>
<script src="https://kit.fontawesome.com/7519784cd5.js" crossorigin="anonymous"></script>
</html>