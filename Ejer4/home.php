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

      
      <?php
      if($_SESSION['rol'] == 'docente'){
      echo "<table class='table'>";
      include "conexion.inc.php";
      $resultado = mysqli_query($con,"select
avg(case when depto='La Paz' then promedio end) LP,
avg(case when depto='Beni' then promedio end) BN,
avg(case when depto='Pando' then promedio end) PD,
avg(case when depto='Cochabamba' then promedio end) CB,
avg(case when depto='Santa Cruz' then promedio end) SC,
avg(case when depto='Oruro' then promedio end) ORU,
avg(case when depto='Chuquisaca' then promedio end) CH,
avg(case when depto='Tarija' then promedio end) TJ,
avg(case when depto='Potosi' then promedio end) PT
from estudiante");
      while($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";   
          foreach ($row as $col => $val) {
              echo "<td>".$col."</td>";
          }
        echo "</tr>";
        echo "<tr>";   
          foreach ($row as $col => $val) {
              echo "<td>".$val."</td>";
          }
        echo "</tr>";
      }
      echo "</table>";
}
      ?>
      
      
    </div>
  </div>
</div>
<?php
include "cuerpoF.inc.php";
?>  
