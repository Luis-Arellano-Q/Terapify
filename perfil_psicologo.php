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
  <link rel="stylesheet" href="./style-perfil_psico.css">
</head>
<body>
  <header class="header">
    <div>
        <?php

use LDAP\Result;

          require_once("./conexion-DB/conect.php");
          $conex = new Conexion();
          $getConection = $conex->Conectar();
          session_start();
          $ID_usu=$_SESSION['ID'];
          ?>
      <a href="<?php if($ID_usu!=null){}else{ ?>./Pagina web/index.php<?php } ?>">
        <img src="./Pagina web/imagenes/logo.png" alt="logo de la compañia" class="logo-img">
      </a>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="./Psicologos.php">Psicólogos</a></li>
        <li><a href="./Pagina web/precio.php">Precios</a></li>
        <li><a href="">Perfil</a></li>
          <?php
          if($ID_usu!=null){
         
        
            ?>
            <a class="psico" href="./perfil_usuario.php">
              <img class="img-avatar avatar-main psico_avatar" src="./imagenes/usuario_avatar.png" alt="avatar"></a>
            <?php
          }else{
            ?>
            <a href="./Iniciar_sesion.php" class="boton">Iniciar Sesion</a>
            <?php
          }
        ?>
      </ul>
    </nav>
  </header>
    <?php 
      // id recibido de psicologos.php
      $ID_PSICO=$_GET["id"];
      $consu_psico = "SELECT * FROM psicologo where id=$ID_PSICO";
      $consulta= oci_parse($getConection, $consu_psico);
      oci_execute($consulta);
      $datos= oci_fetch_array($consulta);
    ?>
  <main class="main">
    <section class="configuracion">
      <div class="configuracion_avatar configuracion-right">
        <img class="img-avatar avatar-main" src="./imagenes/usuario_avatar.png" alt="avatar">
        <p><?php echo $datos['NOMBRE']." ".$datos['APELLIDO'];?></p>
        <a href="" class="boton">Agendar cita</a>
      </div>
    </section>
    <div class="form datos">
      <p><b>Nombre: </b><?php echo $datos['NOMBRE'];?></p>

      <p><b>Apellido: </b><?php echo $datos['APELLIDO'];?></p>

      <p><b>Especialidad: </b><?php echo $datos['ESPECIALIDAD'];?></p>

      <p><b>Cedula: </b><?php echo $datos['CEDULA'];?></p>
    </div>
    <div class="confi_grid">

      <div class="form">
        <h3>Formación académica</h3>
        <p>Maestría en psicoterapia
          Universidad Iberoamericana Puebla
          
          Licenciatura en psicología clínica
          Universidad de las Américas Puebla</p>
        </div>
        <div class="form">
          <h3>Sobre mí</h3>
          <p>Me encanta seguir aprendiendo, disfruto mucho la lectura y salir a caminar con mi mascota. Amante del té y los atardeceres.</p>
        </div>
    </div>
  </main>
  <footer class="footer ">
      <ul>
        <li><a href="">Aviso de privacidad</a> | <a href="">Términos y Condiciones</a></li>
      </ul>
  </footer>
</body>
</html>