<!doctype html>
<html lang="en">
  <head>
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
      }.hidden{
      padding: 0;
      border: none;
      background: none;
    }
      .nav-link{
        font-style: italic;
      }
      .content-container div {
            display: none;
      }
      .py-2 d-none d-md-inline-block{
        color: white;
      }
    </style>
    <script type="text/javascript">

      function removerDiv(btnState){
        var div = document.getElementById('consulta')
        div.parentNode.removeChild(div) 
      }

    </script>
    <script type="text/javascript">
      $(document).ready(function () {
        $(".link").click(function(e) {
            e.preventDefault();
            $('.content-container div').hide();
            $('.' + $(this).data('rel')).show();
        });
      });
    </script>
    <?php 
      include ('conexion.php');  $conn = conn(); $categoria;
      if(isset($_POST["categoria"])){ $categoria = $_POST["categoria"]; } 
    ?>
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

   <main role="main" style="margin-top:40px;">
        <div class="container fixed" >

          <div class="row">
            <div class="col-sm-4">
            <h3 class="title">
              LINEA DE PRODUCTOS
            </h3>
          <ul class="list-group list-group-flush">
            <?php 
              $query1 = 'SELECT * FROM CATEGORIA';
              $consulta1 = mysqli_query($conn, $query1);
              while ($row1 = mysqli_fetch_array($consulta1)) { ?>
                <li class="list-group-item">
                <a class="link" onclick="removerDiv()" href="#" data-rel="categoria<?php echo $row1["id_categoria"]; ?>"><?php echo $row1["categoria"]; ?></a>
            </li >
            <?php }?>
          </ul>
          </div>

          <div class="col">
            <div class="row">
                <img src="banner.jpg" class="banner">
                  <?php if(isset($_POST["categoria"])): ?>
                    <div id="consulta">
                  <?php 
                    $query = 'SELECT * FROM categoria WHERE id_categoria = '.$categoria.'';
                    $consulta = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($consulta)) {?>
                  <h2 class="title"><?php echo $row['categoria']; ?></h2>
                  <?php }?>
                    <div class="row">
                        <?php 
                          $query = 'SELECT * FROM PRODUCTO WHERE id_categoria = '.$categoria.'';
                          $consulta = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_array($consulta)) {?>
                            <div class="col-md-4">
                              <?php echo $row["nombre"]; ?>
                              <div class="card mb-4  box-shadow">
                                <div class="card-body"><img src="https://lorempixel.com/200/200/">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                              </div>
                            </div>
                        <?php }?>
                      </div>

                      </div>
                  <?php else: ?>
                    <div id="consulta">
                    <h2 class="title">NUEVOS</h2>
                    <div class="album py-5 bg-light">
                        <div class="col">
                            <?php 
                              $query = 'SELECT * FROM PRODUCTO WHERE nuevo = 1';
                              $consulta = mysqli_query($conn, $query);
                              while ($row = mysqli_fetch_array($consulta)) {?>
                                <div class="row-md-3">
                                  <div class="card mb-3 box-shadow">
                                    <div class="card-title"><?php echo $row["nombre"]; ?></div>
                                    <div class="card-body">
                               
                                    </div>
                                  </div>
                                </div>
                            <?php }?>
                          </div>
                      </div>
                    </div>
                  <?php endif ?>
                <div class="content-container" style="width: 100%;">
                  <?php 
                    $query1 = 'SELECT * FROM CATEGORIA';
                    $consulta1 = mysqli_query($conn, $query1);
                    while ($row1 = mysqli_fetch_array($consulta1)) {
                      echo "<div class='categoria" . $row1["id_categoria"] ."'>";
                      
                      echo "<h2 class='categoria" . $row1["id_categoria"] ." title'>".$row1["categoria"]."</h2>";
                      $query = 'SELECT * FROM PRODUCTO WHERE id_categoria = '.$row1["id_categoria"].'';
                      $consulta = mysqli_query($conn, $query);
                      while ($row = mysqli_fetch_array($consulta)) {
                        echo '<div class="col-md-5 categoria'.$row1["id_categoria"].'">
                              <img src="https://lorempixel.com/200/200/">
                              <span>'. $row["nombre"].'</span>';
                               echo '</div>';
                      }
                      echo '</div>';
                    } ?>
                </div>
              </div>
            </div>
          </div>
          </div>
          
        </div>
    </main>
  <footer>

  </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
