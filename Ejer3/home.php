<?php
session_start();
include "cabecera.inc.php";
?>
<body style='background-color: <?php echo $_SESSION["color"];?>;'>
<div class="infohead">
        <h1>BIENVENIDO A LA <br> 
        CARRERA DE INFORMATICA <br>
        F.C.P.N.</h1>
        <div class="card bg-dark" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $_SESSION['rol'];?>
              </h5>
          </div>
        </div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          
        PRINCIPAL</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./informacion/">INFORMACION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./kardex/">KARDEX</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./instituto/">INSTITUTO DE INVESTIGACIONES</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-0" >
  <div class="row">
    <div class="col-sm-3">
      <h2>U.M.S.A.</h2>
      <img class="img-fluid" src="img/Logo.png" style="max-width: 200px; display: block; margin: 0 auto;"></img>
      <h2>Universidad Mayor de San Andrés</h2>
    </div>
    <div class="col-sm-9 conten">
      <h2>CARRERA DE INFORMATICA</h2>
      <div id="carouselExampleSlidesOnly" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./img/home/index-carousel-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/home/index-carousel-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/home/index-carousel-3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "cuerpoF.inc.php";
?>  
