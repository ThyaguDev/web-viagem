<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre</title>


   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   


<section class="header">

   <a href="home.php" class="logo">Club Tour.</a>

   <nav class="navbar">
      <a href="home.php">Início</a>
      <a href="about.php">Sobre</a>
      <a href="package.php">Pacotes</a>
      <a href="book.php">Agendar</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>



<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>AGENDE AGORA</h1>
</div>



<section class="booking">

   <h1 class="heading-title">Reserve sua viagem!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>nome :</span>
            <input type="text" placeholder="Nome" name="Nome">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Seu Email" name="Email">
         </div>
         <div class="inputBox">
            <span>celular :</span>
            <input type="number" placeholder="Seu Número" name="Celular">
         </div>
         <div class="inputBox">
            <span>endereço :</span>
            <input type="text" placeholder="Seu Endereço" name="Endereço">
         </div>
         <div class="inputBox">
            <span>localidade :</span>
            <input type="text" placeholder="Sua Localidade" name="Localidade">
         </div>
         <div class="inputBox">
            <span>idade :</span>
            <input type="number" placeholder="Sua Idade" name="idade">
         </div>
         <div class="inputBox">
            <span>chegadas :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>deixando :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="Enviar" value="submit" class="btn" name="send">

   </form>

</section>





















<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>Links Rápidos</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>Extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> Perguntas</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Sobre Nós</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Política de Privacidade</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Termos</a>
      </div>

      <div class="box">
         <h3>Contato</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i>Thyaguufieoasd@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> São Paulo, Brasil - 400104 </a>
      </div>

      <div class="box">
         <h3>Seguir</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> Criador <span>Thyago F.</span>  </div>

</section>












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

</body>
</html>