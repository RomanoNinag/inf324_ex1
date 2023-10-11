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
      $resultado = mysqli_query($con,"select * from estudiante");
      $sLP = 0;$sBN = 0;$sPN = 0;$sCB = 0;$sSC = 0;$sORU = 0;$sCH = 0;$sTJ = 0;$sPT = 0;
      $cLP = 0;$cBN = 0;$cPN = 0;$cCB = 0;$cSC = 0;$cORU = 0;$cCH = 0;$cTJ = 0;$cPT = 0;
      while($datos=mysqli_fetch_array($resultado)){
          if($datos['depto']=="La Paz"){
            $sLP += $datos["promedio"];
            $cLP += 1;
          }
          if($datos['depto']=="Beni"){
            $sBN += $datos["promedio"];
            $cBN += 1;
          }
          if($datos['depto']=="Beni"){
            $sBN += $datos["promedio"];
            $cBN += 1;
          }
          if($datos['depto']=="Pando"){
            $sPN += $datos["promedio"];
            $cPN += 1;
          }
          if($datos['depto']=="Cochabamba"){
            $sCB += $datos["promedio"];
            $cCB += 1;
          }
          if($datos['depto']=="Santa Cruz"){
            $sSC += $datos["promedio"];
            $cSC += 1;
          }
          if($datos['depto']=="Oruro"){
            $sORU += $datos["promedio"];
            $cORU += 1;
          }
          if($datos['depto']=="Chuquisaca"){
            $sCH += $datos["promedio"];
            $cCH += 1;
          }
          if($datos['depto']=="Tarija"){
            $sTJ += $datos["promedio"];
            $cTJ += 1;
          }
          if($datos['depto']=="Potosi"){
            $sPT += $datos["promedio"];
            $cPT += 1;
          }
      }
      if($cLP==0){
        $cLP = 1;
      }
      if($cBN==0){
        $cBN = 1;
      }
      if($cCB==0){
        $cCB = 1;
      }
      if($cSC==0){
        $cSC = 1;
      }
      if($cORU==0){
        $cORU = 1;
      }
      if($cCH==0){
        $cCH = 1;
      }
      if($cPT==0){
        $cPT = 1;
      }
      if($cTJ==0){
        $cTJ = 1;
      }
      if($cPN==0){
        $cPN = 1;
      }
      echo "<tr>";   
      echo "<td>La Paz</td>";
      echo "<td>Beni</td>";    
      echo "<td>Pando</td>";   
      echo "<td>Cochabamba</td>";   
      echo "<td>Santa Cruz</td>";   
      echo "<td>Oruro</td>";   
      echo "<td>Chuquisaca</td>";   
      echo "<td>Potosi</td>";   
      echo "<td>Tarija</td>";   
      echo "</tr>";

      echo "<tr>";   
      echo "<td>".$sLP/$cLP."</td>";
      echo "<td>".$sBN/$cBN."</td>";
      echo "<td>".$sPN/$cPN."</td>";
      echo "<td>".$sCB/$cCB."</td>";
      echo "<td>".$sSC/$cSC."</td>";
      echo "<td>".$sORU/$cORU."</td>";
      echo "<td>".$sCH/$cCH."</td>";
      echo "<td>".$sPT/$cPT."</td>";
      echo "<td>".$sTJ/$cTJ."</td>";
      echo "</tr>";

      
      //otro tabla
      
      echo "</table>";
      }
      ?>
      
      
    </div>
  </div>
</div>
<?php
include "cuerpoF.inc.php";
?>  
