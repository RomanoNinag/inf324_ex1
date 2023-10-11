<?php
include 'conexion.inc.php';

if(isset($_POST['btn_submit'])&&isset($_POST['Usuario']) && isset($_POST['Password'])){
    //$text = $_POST('text')
    $color = $_POST['color'];

    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    
    $consulta = "select * from usuario where Usuario = '$Usuario' and contras = '$Password'";
    $result = mysqli_query($con, $consulta);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION["CI"]=$row['CI'];
        $_SESSION["Usuario"]=$row['Usuario'];
        $_SESSION["Password"]=$row['contras'];
        $_SESSION["rol"]=$row['rol'];
        $_SESSION['color']=$color;
        //$_SESSION["head"]=$_POST['head'];
        //$_SESSION["body"]=$_POST['body'];
        header("Location: ./home.php");
    }
    else{
        header("Location: ./index.php");
    }
}
?>
