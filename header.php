<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Deposito Construmar</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head> 

<body>
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">

  <div class="w3-display-left w3-text-white">
    <span class="w3-jumbo w3-hide-small deposito">Deposito Construmar</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Comece com o que é importante</span><br>
    <span class="w3-large">Ajudando você a contruir os seus sonhos.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">leia mais sobre nós</a></p>
  </div> 
  <!-- links para redes sociais -->
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>

  </div>
  <!-- Navbar (sit on top) Menu Cabeçalho inicio-->
<div class="w3-top">
  
  <div class="w3-bar w3-white w3-card" id="">
    
    <a href="index.php" class="w3-bar-item w3-button w3-wide">INICIO</a>
    <!-- Right-sided navbar links / Links da barra de navegação do lado direito -->
    <div class="w3-right">
      <a href="index.php" class="w3-bar-item w3-button">SOBRE</a>
      <a href="time" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TIME</a>
      <a href="servicos" class="w3-bar-item w3-button"><i class="fa fa-th"></i> SERVIÇOS</a>
      <a href="preco" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PREÇOS</a>
      <a href="contato" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTATO</a>
    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon / 
     Ocultar links flutuantes à direita em telas pequenas e substituí-los por um ícone de menu /-->
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
    

  </div>
  
</div>
<!-- Navbar (sit on top) Menu Cabeçalho fim-->

<!-- Sidebar on small screens when clicking the menu icon / Barra lateral em telas pequenas ao clicar no ícone do menu -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">

  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a> 
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">SOBRE</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TIME</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">TRABALHO</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">ORÇAMENTO</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTATO</a>

</nav>

</header>

