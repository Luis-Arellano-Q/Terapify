<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terapify </title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style-perfil_usuario.css">
</head>
<body>
  <header class="header">
    <div>
      <a href="./Pagina web/index.php">
        <img src="./Pagina web/imagenes/logo.png" alt="logo de la compañia" class="logo-img">
      </a>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="">Psicólogos</a></li>
        <li><a href="./pagar.php">pagar</a></li>
        <li><a href="./conexion-DB/db-cerrar_sesion.php">Cerrar Sesión</a></li>
        <li><a href="">Perfil</a></li>
      </ul>
    </nav>
  </header>
    <?php 
      require_once("./conexion-DB/conect.php");
      $conex = new Conexion();
      $getConection = $conex->Conectar();
      session_start();
      $ID_usu=$_SESSION['ID'];

      $sele = "SELECT * FROM cliente where id=$ID_usu";
      $result= oci_parse($getConection, $sele);
      oci_execute($result);
      $datos = oci_fetch_array($result);
    ?>
  <main class="main">
    <section class="configuracion">
      <div class="configuracion-left">
        <h3>Configuración personal</h3>
        <button class="btn-pass"><a href="./cambiar_contrasenia.php"> Cambiar contraseña </a><span><img src="./imagenes/candado.png" alt="candado"></span></button>
        <p>Verifica y/o actualiza tus datos personales aquí. Tus datos son importantes para un seguimiento clínico más completo.</p>
      </div>
      <div class="configuracion-right">
        <img class="img-avatar avatar-main" src="./imagenes/usuario_avatar.png" alt="avatar">
        <p><?php echo $datos['NOMBRE']." ".$datos['APELLIDO'];?></p>
      </div>
    </section>
    <form class="form" action="" method="post">
      <label for="nombre" >Nombre:</label>
      <input type="text" value="<?php echo $datos['NOMBRE'];?>" name="nombre" placeholder="Nombre" id="nombre" >

      <label for="apellido" >Apellido:</label>
      <input type="text" value="<?php echo $datos['APELLIDO'];?>" name="apellido" placeholder="Apellido" id="apellido">

      <label for="telefono" >Telefono:</label>
      <input type="tel" value="<?php echo $datos['TELEFONO'];?>" name="telefono" placeholder="Telefono" id="telefono">

      <label for="email" >Correo electronico:</label>
      <input type="email" value="<?php echo $datos['CORREO'];?>" name="email" placeholder="Correo electronico"id="email">

      <label for="edad" >Edad:</label>
      <input type="number" value="<?php echo $datos['EDAD'];?>" name="edad" placeholder="0"id="edad">
      <input type="submit" value="Guardar" name="guardar">
    </form>
  </main>
  <footer class="footer ">
      <ul>
        <li><a href="">Aviso de privacidad</a> | <a href="">Términos y Condiciones</a></li>
      </ul>
  </footer>
  <?php

    if(isset($_POST["guardar"])){
      
      $name= trim($_POST["nombre"]);
      $apellido= trim($_POST["apellido"]);
      $celular= trim($_POST["telefono"]);
      $email= trim($_POST["email"]);
      $edad= $_POST["edad"];

      $sql = "UPDATE CLIENTE SET NOMBRE = '$name', APELLIDO='$apellido', TELEFONO=$celular, CORREO='$email',EDAD=$edad WHERE ID = $ID_usu";
      $stmt= oci_parse($getConection, $sql);
        
      if (oci_execute($stmt)){
        // echo "actualizacion correcta";
        header("location:perfil_usuario.php");
      }else{
        echo "ups un error";
      }
    }
  ?>
</body>
</html>