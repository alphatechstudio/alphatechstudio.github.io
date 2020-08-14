<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Alphatech Studio</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/custom.css">
</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg site-header sticky-top py-1 nav-toggler" id="navbar-menu">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
          <a class="py-2 d-none d-md-inline-block" href="#">Alphatech Studio</a>
          <a class="py-2 d-none d-md-inline-block" href="#design">Design</a>
          <a class="py-2 d-none d-md-inline-block" href="#solutions">Soluções</a>
          <a class="py-2 d-none d-md-inline-block" href="#games">Jogos</a>
          <a class="py-2 d-none d-md-inline-block" href="#contact">Contato</a>
        </div>
      </div>
    </nav>
  </header>

  <div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
      <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mainCarousel" data-slide-to="1" class=""></li>
      <li data-target="#mainCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item carousel-item-next carousel-item-left">
        <img class="first-slide" src="img/space_bouncers.png" alt="Space Bouncers">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Space Bouncers</h1>
            <p>
              Já Disponível para Android
            </p>
            <p><a class="btn btn-lg btn-success" href="#" role="button">Experimente!</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Pre Render Creator">
        <div class="container">
          <div class="carousel-caption">
            <h1>
              Pre Render Creator - PRC (Blender Add-On)
            </h1>
            <p>
              Com o conceito de modelar apenas uma vez e renderizar completamente, será possível a criação de sprites de múltiplos ângulos com apenas um único click.
            </p>
            <p><a class="btn btn-lg btn-primary" href="https://viniguerrero.itch.io/pre-render-creator" role="button">Confira</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active carousel-item-left">
        <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Godot Game Tools">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>
              Godot Game Tools - GGT (Blender Add-On)
            </h1>
            <p>
              Um plug-in que contém ferramentas para facilitar o processo de criação / importação de assets para agilizar o processo de desenvolvimento dos games.
            </p>
            <p><a class="btn btn-lg btn-danger" href="https://viniguerrero.itch.io/godot-game-tools" role="button">Confira</a></p>
          </div>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container marketing">

    <div class="row white-text">
      <div class="col-lg-4">
        <img class="rounded-circle" src="img/space_bouncers2.png" alt="Space Bouncers" width="140" height="140">
        <h2>Space Bouncers</h2>
        <p>
          Um jogo casual e desafiador que conta com uma jogabilidade bem dinâmica onde a diversão do jogador vai além desta galáxia.
        </p>
        <p><a class="btn btn-secondary" href="#" role="button">Experimente</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" src="img/prc.png" alt="Pre Render Creator" width="140" height="140">
        <h2>Pre Render Creator</h2>
        <p>
          Plug-In que tem como objetivo auxiliar e agilizar o processo de criação de spritesheets a partir de modelos 3D no desenvolvimento de jogos.
        </p>
        <p><a class="btn btn-secondary" href="https://viniguerrero.itch.io/pre-render-creator" role="button">Experimente</a></p>
      </div>
      <div class="col-lg-4">
        <img class="rounded-circle" src="img/ggt.png" alt="Godot Game Tools" width="140" height="140">
        <h2>Godot Game Tools</h2>
        <p>
          Ferramenta focada no desenvolvimento de jogos 3D com foco na praticidade para animações 3D junto a engine Godot.
        </p>
        <p><a class="btn btn-secondary" href="https://viniguerrero.itch.io/godot-game-tools" role="button">Experimente</a></p>
      </div>
    </div>



    <hr class="featurette-divider" id="design">
    <div class="row featurette">
      <div class="col-md-7 item-content">
        <h2 class="featurette-heading">
          Design &</br>
          <span class="text-muted">Tecnologia</span>
        </h2>
        <p class="lead">
          Utilizamos as melhores tecnologias disponíveis atualmente no mercado para maior integridade e compatibilidade da sua solução, proporcionando uma experiência fluída e dinâmica para seus clientes.
        </p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" alt="300x300" src="img/design.png" style="width: 300px; height: 300px;">
      </div>
    </div>

    <hr class="featurette-divider" id="solutions">
    <div class="row featurette">
      <div class="col-md-7 order-md-2 item-content">
        <h2 class="featurette-heading">
          Soluções Digitais
        </br>
        <span class="text-muted">Personalizadas</span>
      </h2>
      <p class="lead">
        Garanta o máximo desempenho para o seu negócio com nossas soluções em aplicativos Android e iOS, websites, landing-pages, plataformas com soluções de pagamentos online e painéis administrativos, hospedagem e mais.
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" alt="300x300" src="img/solutions.png" style="width: 300px; height: 300px;">
    </div>
  </div>

  <hr class="featurette-divider" id="games">
  <div class="row featurette">
    <div class="col-md-7 item-content">
      <h2 class="featurette-heading">
        Jogos &
      </br>
      <span class="text-muted">Advergames</span>
    </h2>
    <p class="lead">
      Proporcionando experiências únicas para usuários e jogadores de todo o mundo. Advergames para campanhas publicitárias, aumentando o engajamento digital da sua marca e o alcance de seus produtos.
    </p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" alt="300x300" src="img/games.png" style="width: 300px; height: 300px;">
  </div>
</div>


<hr class="featurette-divider" id="contact">
<div class="row featurette">
  <div class="col-md-7 order-md-2 item-content">
    <h2 class="featurette-heading">
      Contato &
    </br>
    <span class="text-muted">Planejamento</span>
  </h2>
  <p class="lead">
  </br>
  Vamos conversar e evoluir esta idéia! - contato@alphatech.studio
  </br>
  "A mente que se abre a uma nova idéia jamais voltará ao seu tamanho original (A. Einsten)".
  </p>
</div>
<div class="col-md-5 order-md-1">
  <img class="featurette-image img-fluid mx-auto" alt="300x300" src="img/contact.png" style="width: 300px; height: 300px;">
</div>
</div>


<hr class="featurette-divider">

</div>


<footer class="container">
  <p class="float-right"><a href="#">Voltar Ao Início</a></p>
  <p> · 2020 · Alphatech Studio · <a href="/privacy_policy.php">Política de Privacidade</a> · </p>
</footer>
</main>


<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/holder.min.js"></script>

</body>
