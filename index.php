
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MM produtos</title>

  <!-- Links CSS-->
  <link rel="stylesheet" href="./assets/css/normalize.css">
  <link rel="stylesheet" href="./assets/css/components/colors.css">
  <link rel="stylesheet" href="./assets/css/index.css">
  <link rel="stylesheet" href="./assets/css/components/header.css">
  

  <!-- Links fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <script src="./src/script.js"></script>
  <script src="https://kit.fontawesome.com/7519784cd5.js" crossorigin="anonymous"></script>
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
  
  <!-- Main Starts-->

  <section class="home" id="home">
    <div class="home-content">
      <h1 class="title">MM <span>Watch</span> Store</h1>
      <p>Os Relógios da MM Produtos são acessórios que dão um upgrade automático em qualquer visual de respeito. Tanto no dia a dia e ocasiões informais quanto numa pegada mais tradicional, perfeitos para serem usado no trabalho ou em ocasiões formais.</p>
      <p class="promo">Compre hoje e ganhe 20% de desconto</p>
      <button>Comprar agora</button>
    </div>
    <div class="watch-photo">
      <img src="./assets/images/watch.png" alt="watch">
    </div>
  </section>

  <section class="shop" id="shop">
      <div class="product-card">
        <img src="/assets/images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
      <div class="product-card">
        <img src="/assets/images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
      <div class="product-card">
        <img src="/assets/images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
      <div class="product-card">
        <img src="/assets/images/watch.png" alt="" srcset="">
        <div class="card-content">
          <h4>Rolex</h4>
          <h3>Relógio Masculino Couro</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio deserunt debitis, pariatur</p>
          <ul>
            <li class="card-price">R$ 1000,00</li>
            <li><button><i class="fa fa-bag-shopping"></i></button></li>
          </ul>
        </div>
      </div>
  </section>

  <?php include 'includes/instagram.php';?>

  <footer>
    <div class="footer-text">
      <p>Todos os direitos reservados &copy;</p>
    </div>
  </footer>




</body>
</html>