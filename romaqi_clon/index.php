<!doctype html>
<html lang="en">
  <head>

  <?php include ('conexion.php'); $conn = conn(); ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title></title>

  <style type="text/css">
      input[type=search] {
        border: solid 1px #ccc;
        padding: 9px 10px 9px 32px;
        width: 15%;
      }
      .categoria_footer{
        color: #eeeeee;
      }
      .categoria_footer:hover{
        color: #ff9898
      }
    .hidden{
      padding: 0;
      border: none;
      background: none;
    }
    .nav-link{
      font-style: italic;
    }
  </style>
    </style>
  </head>

  <body>
    <header>
      <div class="navbar navbar-dark bg-dark ">
        <a class="navbar-brand" href=""> YASIRA</a>
        <h2><a  class="navbar-brand"  href="index.php">Inicio</a></h2>
        <h2><a  class="navbar-brand"  href="productos.php">Productos</a></h2>
        <h2><a  class="navbar-brand"  href="#">Sobre Nosotros</a></h2>
        <h2><a class="navbar-brand"  href="#">Contacto</a></h2>
        <h2 class="navbar-brand">YO HABIA PONIDO UN NUMERO DE TELEFONO AQUI</h2>
          <form class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn my-2 my-sm-0" type="submit" style="background: white;">BUSCAR</button>
          </form>
      </div>
  </header>

  <main role="main">
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="http://lorempixel.com/1600/400/" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="http://lorempixel.com/1600/400/" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="http://lorempixel.com/1600/400/" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="album py-5" style="background: #d7d5d5;">
      <div class="container">
        <div class="row">
          <?php 
            $query = 'SELECT * FROM CATEGORIA';
            $consulta = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($consulta)) { ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="card mb-3 box-shadow">
                <div class="card-body">
                  <form action="productos.php" method="post">
                    <input type="hidden" name="categoria" value='<?php echo $row["id_categoria"]; ?>'>
                    <button type="submit" class="hidden">
                      <p class="card-text" ><?php echo $row["categoria"]; ?></p>
                      <img src="http://lorempixel.com/200/150/">
                    </button>
                  </form>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="block" style="margin-top:30px;">
        <h2 class="title">OFERTAS</h2>
        <div class="row" style="margin-top:30px;">
        <div class="col-md-3" style=" width:-webkit-calc(50% - 5px);
          width:calc(50% - 5px);">
           <img src="https://lorempixel.com/200/200">
         </div> 
         <div class="col-md-3" style=" width:-webkit-calc(50% - 5px);
          width:calc(50% - 5px);">
           <img src="https://lorempixel.com/200/200">
         </div> 
         </div>       
      </div>
    </div>
  </main>
  <footer>
<div class="block-footer" style="font-size:14px; color: white; margin-top:60px;">      
  <div class="content">
    <div class="content-top" >
      <div class="container"  style=" background: #171717;">
        <div class="row" style="  justify-content: center;" >
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h4 class="title" style="margin-top:30px;">Datos de contacto</h4 >
            <ul style="margin-top:30px;">
              <li>Somos ROMAQUI, Maquinaria <br>para el Agro y Construcción</li>
              <li><i class="icons icon-location"></i> Plaza ferretero Las Malvinas, <br>tienda 1066, Av. Guillermo <br>Dansey 401, Lima, Lima</li>
              <li> +511 - 278 8778</li>
              <li>info@romaqui.com.pe</li>
              <li>romaqui@vip.163.com</li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="title" style="margin-top:30px;">La Empresa</h4>
            <ul style="margin-top:30px;">
              <li><a class="categoria_footer" href="#">Nosotros</a></li>
              <li><a class="categoria_footer" href="#">Misión</a></li>
              <li><a class="categoria_footer" href="#">Visión</a></li>
              <li><a class="categoria_footer" href="#">Responsabilidad social</a></li>
              <li><a class="categoria_footer" href="#">Hitos</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="title" style="margin-top:30px;">Productos</h4>
            <ul style="margin-top:30px;">
              <?php 
                $query = 'SELECT * FROM CATEGORIA';
                $consulta = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($consulta)) { ?>
                <li>
                  <form action="productos.php" method="post">
                    <input type="hidden" name="categoria" value='<?php echo $row["id_categoria"]; ?>'>
                    <button type="submit" class="hidden">
                      <span class="categoria_footer"><?php echo $row["categoria"]; ?></span>
                    </button>
                </form></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
  </footer>
  </body>
</html>
