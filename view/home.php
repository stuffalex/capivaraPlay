<?php
include_once('./../model/verificaLogin.php');


?>



<!DOCTYPE html>
<html lang = "pt-br">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Capivara Play</title>

        <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
        <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
        <link rel="stylesheet" type="text/css" href="./estilos/estilohome.css">
        <link rel="stylesheet" type="text/css" href="./estilos/estiloCarrossel.css">

        <script>
          window.console = window.console || function(t) {};
        </script>
        <script>
          if (document.location.search.match(/type=embed/gi)) {
             window.parent.postMessage("resize", "*");
          }
        </script>
    </head>
    <body>
        <header class="header">
    
            <label for="header-toggle" class="header-button">
                <span class="header-icon">&nbsp;</span>
            </label>
    
            <div class="header-background">&nbsp;</div>
    
            <div class="header-limiter">
 
                <nav class="nav-bar">
                    <img class="logo" src="./icons/logo.svg" alt="Logo Capivara play">
                    <a href="." class="logo"></a>

                    <div id="divBusca">
                        <input type="text" id="txtBusca" placeholder="Buscar..."/>
                        <img src="./icons/lupa.svg" id="btnBusca" alt="Buscar"/>
                        <button type="menu" id="categorias">
                                <img src="./icons/categorias.svg" id="btnCategorias" alt="Categorias"/>
                        </button> 
                    </div>
    
                    
                    <a href="./../model/logout.php" class="logout"><img class="logout" src="./icons/logout.svg" alt="sair"/></a>
                </nav>   
            </div>
          </header>

        
          <main>
            <div id="carousel">
              <h1>Recentes</h1>
              <div class="hideLeft">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/aOF0vdvoD7k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
              </div>
              
              <div class="prevLeftSecond">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/SVibxQOt_Ow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
              <div class="prev">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/euQrskSt1eY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
              <div class="selected">
                <iframe id="imgcarrocel" width="560" height="315" src="https://www.youtube.com/embed/dce5RNg4G_4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
              <div class="next">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Uf0Gqr7YwUw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
              <div class="nextRightSecond">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/zHUJWxs9hb4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
              <div class="hideRight">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/lSqDzJgedRI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
            </div>
          </main>
       

          <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
          <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
          <script id="rendered-js">

                function moveToSelected(element) {

            if (element == "next") {
                var selected = $(".selected").next();
            } else if (element == "prev") {
                selected = $(".selected").prev();
            } else {
                var selected = element;
            }

            var next = $(selected).next();
            var prev = $(selected).prev();
            var prevSecond = $(prev).prev();
            var nextSecond = $(next).next();

            $(selected).removeClass().addClass("selected");

            $(prev).removeClass().addClass("prev");
            $(next).removeClass().addClass("next");

            $(nextSecond).removeClass().addClass("nextRightSecond");
            $(prevSecond).removeClass().addClass("prevLeftSecond");

            $(nextSecond).nextAll().removeClass().addClass('hideRight');
            $(prevSecond).prevAll().removeClass().addClass('hideLeft');

          }

          // Eventos teclado
          $(document).keydown(function (e) {
            switch (e.which) {
              case 37: // left
                moveToSelected('prev');
                break;

              case 39: // right
                moveToSelected('next');
                break;

              default:return;}

            e.preventDefault();
          });

          $('#carousel div').click(function () {
            moveToSelected($(this));
          });

          $('#prev').click(function () {
            moveToSelected('prev');
          });

          $('#next').click(function () {
            moveToSelected('next');
          });
                //# sourceURL=pen.js
                
            </script>
      
      <div class="videos">
        <h1>Recomendados</h1> 
       
        
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/Qhb81UhgvvY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/2r4CTuhfaKc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/Nbcyf1i6oio" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/jQwzWtw32aY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/UkC9Y_8g6EQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/5nRHdl0dTZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/vy38NLQeZJM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/d_BJChFH6qQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/jlS3D94X45Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/GXsxLaEwVMI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/ZT3D7y2fHfo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/W4GxcVuj3q0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/HkL8GzqkujU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/ujtO23UEg5E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/ZpLnP_8XSQ8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/PAAQp2OXnp4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <div id="video"><iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/w4pU66dfqrA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>      
      
      <div class="rodape">
        <ul> Nossa Empresa
          <li id="itemNE"><a href="#Vender">Vender Conteudo</a></li>
          <li id="itemNE"><a href="#Assinar">Assinar/renovar</a></li>
          <li id="itemNE"><a href="./../view/contato.php">Fale Conosco</a></li>
          <li id="itemNE"><a href="#TrabalheConosco">Trabalhe conosco</a></li>
        </ul>
      </div> 
      
    </body>
</html>         