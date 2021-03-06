<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>APAO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts/iconos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container-fluid">
      <header>
        <div class="row">
          <div id="cabecera" class="col-xs-12 hidden-xs">
            <div id="logo">
              <img src="img/logo%20header.png" class="img-responsive" alt="logo">
            </div>
            <div id="descripcion">
              <span>23 de mayo de 2016</span>
              <h2>Asociación de Profesionales Andaluces de Orientación Profesional</h2>
            </div>
          </div>
        </div>

<!-- ********** MENU ********** -->

        <div class="navpills hidden-xs">
          <ul id="menu" class="nav nav-pills">
            <li role="presentation"><a href="#">INICIO</a></li>
            <li role="presentation"><a href="#">NOTICIAS</a></li>
            <li role="presentation"><a href="#">OPINIONES</a></li>
            <li role="presentation"><a href="#">RECURSOS</a></li>
            <li role="presentation"><a href="#">SOCIOS</a></li>
            <li role="presentation"><a href="#">CONTACTO</a></li>
          </ul>
        </div>
        <!-- MENU Para medidas menores de 996px -->
        <nav class="navbar navbar-default visible-xs">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo%20header%20blanco.png" alt="Logo APAO"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs">
              <ul class="nav navbar-nav navbar-right">
                <li role="presentation"><a href="#">INICIO</a></li>
                <li role="presentation"><a href="#">NOTICIAS</a></li>
                <li role="presentation"><a href="#">OPINIONES</a></li>
                <li role="presentation"><a href="#">RECURSOS</a></li>
                <li role="presentation"><a href="#">SOCIOS</a></li>
                <li role="presentation"><a href="#">CONTACTO</a></li>
              </ul>
              </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
        </nav>
      </header>

<!-- ********** PRINCIPAL ********** -->

      <div id="principal" class="col-md-9">

        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
          <h2>DESTACAMOS ...</h2>
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="contenidoslide">
                <div class="fotoslide">
                  <img src="img/fotoslider.png" alt="Slider 1">
                </div>
                <div class="carousel-caption">
                  <h3>Titulo del Slider 1</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur temporibus, iure sint eligendi repellat? Sequi blanditiis autem porro inventore, minus eius. Voluptatum accusantium, non explicabo animi adipisci asperiores ipsam voluptate?</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="contenidoslide">
                <div class="fotoslide">
                  <img src="img/fotoslider.png" alt="Slider 1">
                </div>
                <div class="carousel-caption">
                  <h3>Titulo del Slider 1</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur temporibus, iure sint eligendi repellat? Sequi blanditiis autem porro inventore, minus eius. Voluptatum accusantium, non explicabo animi adipisci asperiores ipsam voluptate?</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="contenidoslide">
                <div class="fotoslide">
                  <img src="img/fotoslider.png" alt="Slider 1">
                </div>
                <div class="carousel-caption">
                  <h3>Titulo del Slider 1</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur temporibus, iure sint eligendi repellat? Sequi blanditiis autem porro inventore, minus eius. Voluptatum accusantium, non explicabo animi adipisci asperiores ipsam voluptate?</p>
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!--Fin Carousel-->

<!-- ********** NOTICIAS ********** -->

        <section id="noticias">

          <h2>NOTICIAS</h2>

          <article class="row post">
            <div class="imagen col-xs-12 col-sm-2">
              <img class="img-thumbnail" src="img/fotopost4.jpg" alt="foto post">
            </div>
            <div class="testpost col-xs-12 col-sm-10">
              <h3><a href="#">Titulo del post 1</a></h3>
              <small class="pao-books"><a href="#"> Noticias</a></small> | <small><span class="apao-price-tag"></span> <a href="">Cádiz, Junta Andalucía</a></small>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum harum temporibus doloremque suscipit sed aspernatur et nemo eligendi impedit assumenda atque ratione blanditiis debitis maiores numquam velit, obcaecati quod sunt, recusandae, totam, distinctio ipsa minus omnis! Velit necessitatibus, neque, ab iusto eveniet atque ratione amet magni magnam quas libero voluptatem vitae commodi modi, nam cupiditate dignissimos harum. Eaque excepturi maxime est cupiditate maiores molestias eligendi officiis culpa necessitatibus accusamus, ad tenetur quo corporis voluptatibus dolore, quasi quia saepe nobis! <small><a href="#">(mas..)</a></small></p>
            </div>
          </article>
            <hr size=3 width= 50% align=center/>

          <article class="row post">
            <div class="imagen col-xs-12 col-sm-2">
              <img class="img-thumbnail" src="img/fotopost1.jpg" alt="foto post">
            </div>
            <div class="testpost col-xs-12 col-sm-10">
              <h3><a href="#">Titulo del post 2</a></h3>
              <small class="pao-books"><a href="#"> Noticias</a></small> | <small><span class="apao-price-tag"></span> <a href="">Cádiz, Junta Andalucía</a></small>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum consectetur, quod ratione quo aspernatur quas velit soluta, sit inventore, voluptate voluptatum saepe neque rerum. Eum nihil ratione necessitatibus numquam! Reiciendis ad eius nisi et reprehenderit, provident in, recusandae, necessitatibus labore mollitia quam at? Minima nobis reiciendis sed, earum vel sapiente amet repellendus! Obcaecati delectus exercitationem quisquam similique distinctio dolor, labore quam corporis quidem, ut ipsum voluptatem cumque modi eos! Dolorem deserunt voluptatum sed, laborum!<small><a href="#">(mas..)</a></small></p>
            </div>
          </article>
            <hr size=3 width= 50% align=center/>

          <article class="row post">
            <div class="imagen col-xs-12 col-sm-2">
              <img class="img-thumbnail" src="img/fotopost8.jpg" alt="foto post">
            </div>
            <div class="testpost col-xs-12 col-sm-10">
              <h3><a href="#">Titulo del post 3</a></h3>
              <small class="pao-books"><a href="#"> Noticias</a></small> | <small><span class="apao-price-tag"></span> <a href="">Cádiz, Junta Andalucía</a></small>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti ex a iste eveniet beatae, aspernatur suscipit minima totam voluptatem, illo nulla aliquam repellat laboriosam tempora ad, voluptas quia distinctio mollitia ipsam. Odit laudantium, accusantium quisquam natus, voluptatum odio earum iure eum blanditiis maxime modi soluta amet maiores officia excepturi ex aperiam eaque quasi! Magni non repellat, amet nesciunt voluptatibus, nostrum animi est veniam, porro asperiores modi laudantium. Laboriosam fugit soluta adipisci excepturi reiciendis ab nobis eius, maiores quia.<small><a href="#">(mas..)</a></small></p>
            </div>
          </article>

        </section>

<!-- ********** SOCIOS ********** -->

        <section id="socios" class="row">
          <div class="jumbotron">
            <div class="jumbtexto">
              <h2>VEN CON NOSOTROS</h2>
              <p>Consigue información exclusiva y muchas ventajas</p>
              <p><a class="btn btn-lg" href="#" role="button">Entrar</a></p>
            </div>
          </div>
        </section>

<!-- ********** OPINION ********** -->

        <section id="opinion" class="row">
          <h2>OPINION</h2>

          <article class="col-md-4 opinion">
            <div class="imagen">
              <img class="img-thumbnail" src="img/fotopost1.jpg" alt="foto post">
            </div>
            <div class="textpost">
              <h3><a href="#">Titulo del post 1</a></h3>
              <a href="#"><span class="apao-user"> Autor: Miguel de Cervantes</span></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum harum temporibus doloremque suscipit sed aspernatur et nemo eligendi impedit assumenda atque ratione blanditiis debitis maiores numquam velit, obcaecati quod sunt, recusandae.<small>(mas..)</small></p>
            </div>
          </article>

          <article class="col-md-4 opinion">
            <div class="imagen">
              <img class="img-thumbnail" src="img/fotopost5.jpg" alt="foto post">
            </div>
            <div class="textpost">
              <h3><a href="#">Titulo del post 2</a></h3>
              <a href="#"><span class="apao-user"> Autor: Miguel de Cervantes</span></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum harum temporibus doloremque suscipit sed aspernatur et nemo eligendi impedit assumenda atque ratione blanditiis debitis maiores numquam velit, obcaecati quod sunt, recusandae, totam.<small>(mas..)</small></p>
            </div>
          </article>

          <article class="col-md-4 opinion">
            <div class="imagen">
              <img class="img-thumbnail" src="img/fotopost6.jpg" alt="foto post">
            </div>
            <div class="textpost">
              <h3><a href="#">Titulo del post 3</a></h3>
              <a href="#"><span class="apao-user"> Autor: Miguel de Cervantes</span></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate laborum harum temporibus doloremque suscipit sed aspernatur et nemo eligendi impedit assumenda atque ratione blanditiis debitis maiores numquam velit, obcaecati quod sunt, recusandae, totam, distinctio ipsa minus omnis! <small>(mas..)</small></p>
            </div>
          </article>

        </section>

<!-- ********** SOCIOS ********** -->

        <section id="recursos" class="row">
          <div class="jumbotron">
            <div class="jumbtexto">
              <h2>RECURSOS</h2>
              <p>Una zona muy útil para ti</p>
              <p><a class="btn btn-lg" href="#" role="button">Entrar</a></p>
            </div>
          </div>
        </section>

      </div><!-- Fin del sección PRINCIPAL -->

<!-- ********** ASIDE ********** -->

      <aside id="sidebar" class="col-md-3 well">

        <div class="entrada">
          <h2>ENTRADA SOCIOS</h2>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Usuario</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Entrar</button>
          </form>
        </div>
        <div class="widget1">
          <h2>CALENDARIO</h2>
          <img src="img/calendar.png" alt="Calendario">
        </div>

        <div class="widget2">
          <h2>MAS VISTOS</h2>
          <ol>
             <li><a href="#">Titulo post 1</a></li>
             <li><a href="#">Titulo post 2</a></li>
             <li><a href="#">Titulo post 3</a></li>
             <li><a href="#">Titulo post 4</a></li>
             <li><a href="#">Titulo post 5</a></li>
           </ol>
        </div>

        <div class="widget3">
          <h2>TWITTER</h2>
          <img src="img/twitter.jpg" alt="twitter" class="img-responsive">
        </div>

        <div class="widget4">
          <h2>FACEBOOK</h2>
          <img src="img/facebook.jpg" alt="facebook" class="img-responsive">
        </div>
      </aside>

<!-- ********** FOOTER ********** -->

      <footer class="col-md-12">
          <h3>Quienes Somos · Objetivos</h3>
          <h4>Aviso legal - Condiciones de uso - Política de Cookies</h4>
          <h4>Copyrignt &copy; 2016 APAO Asociación de Profesionales Andaluces de Orientación Profesional</h4>
          <div class="box">
            <div><img class="letra" src="img/firma/firma_L.png" alt="L"></div>
            <div><a href="http://lovb.github.io" target="_blank"><img class="logo" src="img/firma/firma_LOGO.png" alt="LOGO"></a></div>
            <div><img class="letra" src="img/firma/firma_VB.png" alt="L"></div>
            <div><img class="letra" src="img/firma/firma_github.png" alt="L"></div>
        </div>
      </footer>
    </div><!-- Final container fluid -->
    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Animacion firma LOVB -->
    <script src="js/functions.js"></script>
    </body>
  </html>
