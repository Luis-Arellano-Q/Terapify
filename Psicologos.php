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
        <?php
          use LDAP\Result;
          require_once("./conexion-DB/conect.php");
          $conex = new Conexion();
          $getConection = $conex->Conectar();
          session_start();
          $ID_usu=$_SESSION['ID'];
          // if($ID_usu!=null){
        ?>
      <a href="<?php if($ID_usu!=null){}else{ ?>./Pagina web/index.php<?php } ?>" >
        <img src="./Pagina web/imagenes/logo.png" alt="logo de la compañia" class="logo-img">
      </a>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="./Psicologos.php">Psicólogos</a></li>
        <li><a href="./Pagina web/precio.php">Precios</a></li>

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
  <main class="main">
    <section class="section_cards ">
      <?php 
        // $sele = "SELECT ID FROM psicologo";
        // $result= oci_parse($getConection, $sele);
        // oci_execute($result);
        // $i=0;
        // while(($datos=oci_fetch_assoc($result))!=false){
        // }
      ?>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=16";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_h-1.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>">Ver perfil</a>
      </div>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=17";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_h.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>" class="perfil_psico">Ver perfil</a>
      </div>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=18";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_h-2.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>" class="perfil_psico">Ver perfil</a>
      </div>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=19";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_m-2.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>" class="perfil_psico">Ver perfil</a>
      </div>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=20";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_m.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>" class="perfil_psico">Ver perfil</a>
      </div>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=21";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_m-1.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>" class="perfil_psico">Ver perfil</a>
      </div>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=22";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_h-3.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>" class="perfil_psico">Ver perfil</a>
      </div>
      <div class="card_container">
        <?php 
          $consu_psico = "SELECT * FROM psicologo where id=23";
          $consulta= oci_parse($getConection, $consu_psico);
          oci_execute($consulta);
          $dato_psico = oci_fetch_assoc($consulta);
        ?>
        <img src="./imagenes/psico_m-3.webp" alt="">
        <p><?php echo $dato_psico["NOMBRE"]." ".$dato_psico["APELLIDO"]?></p>
        <p>Cedula <?php echo $dato_psico["CEDULA"]?></p>
        <p>Especialidad: <?php echo $dato_psico["ESPECIALIDAD"]?></p>
        <a href="" class="boton">Agendar cita</a>
        <a href="./Pagina web/Perfil_Pisicologo.php?id=<?php echo $dato_psico["ID"]?>" class="perfil_psico">Ver perfil</a>
      </div>
      
    </section>
  </main>
  <footer class="footer ">
      <ul>
        <li><a href="">Aviso de privacidad</a> | <a href="">Términos y Condiciones</a></li>
      </ul>
  </footer>
  <?php

    // if(isset($_POST["guardar"])){
      
    //   $name= trim($_POST["nombre"]);
    //   $apellido= trim($_POST["apellido"]);
    //   $celular= trim($_POST["telefono"]);
    //   $email= trim($_POST["email"]);
    //   $edad= $_POST["edad"];

    //   $sql = "UPDATE CLIENTE SET NOMBRE = '$name', APELLIDO='$apellido', TELEFONO=$celular, CORREO='$email',EDAD=$edad WHERE ID = $ID_usu";
    //   $stmt= oci_parse($getConection, $sql);
        
    //   if (oci_execute($stmt)){
    //     // echo "actualizacion correcta";
    //     header("location:perfil_usuario.php");
    //   }else{
    //     echo "ups un error";
    //   }
    // }
  ?>
</body>
</html>