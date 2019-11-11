<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Capivara Play</title>

        <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
        <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">

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
                    <img class="logo" src="assets\icons\logo.svg" alt="Logo Capivara play">
                    <a href="#inicio" class="logo"></a>

                    <div id="divBusca">
                        <input type="text" id="txtBusca" placeholder="Buscar..."/>
                        <img src="assets\icons\lupa.svg" id="btnBusca" alt="Buscar"/>
                        <button type="menu" id="categorias">
                                <img src="assets\icons\categorias.svg" id="btnCategorias" alt="Categorias"/>
                        </button> 
                    </div>
    
                    
                    <img class="carrinho" src="assets\icons\carrinho.svg" alt="Carrinho de compras"/>
                    <a href="#carrinhodecompras" class="carrinho"></a>
                </nav>   
            </div>
          </header>

          <div id="frase">Mais de 369.311 vídeos livres de direitos com 2.184 novos vídeos adicionados a cada semana.</div>
          <main>
            <div id="carousel">
              <h1>Recentes</h1>
              <div class="hideLeft">
                <img id="imgcarrocel" src="./assets/images/maxresdefault.jpg">
              </div>
              
              <div class="prevLeftSecond">
                <img id="imgcarrocel" src="./assets/images/cerveja.jpg">
              </div>
              
              <div class="prev">
                <img id="imgcarrocel" src="./assets/images/vlogueira.jpg">
              </div>
              
              <div class="selected">
                <img id="imgcarrocel" src="./assets/images/pizza.jpg">
              </div>
              
              <div class="next">
                <img id="imgcarrocel" src="./assets/images/et.jpg">
              </div>
              
              <div class="nextRightSecond">
                <img id="imgcarrocel" src="./assets/images/frutaagua.jpg">
              </div>
              
              <div class="hideRight">
                <img id="imgcarrocel" src="./assets/images/japao.jpg">
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
        <div id="video"><img src="./assets/images/pizza.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/cerveja.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/cozinha.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/et.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/frutaagua.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/homemareia.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/japao.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/mercado.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/morango.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/pizza.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/vlogueira.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/morango.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/cerveja.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/cozinha.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/et.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/pizza.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/cerveja.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/cozinha.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/et.jpg" alt="video"></div>
        <div id="video"><img src="./assets/images/frutaagua.jpg" alt="video"></div>
      </div>      
      
      <div class="rodape">
        <ul> Nossa Empresa
          <li id="itemNE"><a href="#Vender">Vender Conteudo</a></li>
          <li id="itemNE"><a href="#Assinar">Assinar/renovar</a></li>
          <li id="itemNE"><a href="#TrabalheConosco">Trabalhe conosco</a></li>
        </ul>
      </div> 
    </body>
</html>         