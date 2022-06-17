
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
        <li><a href="./conexion-DB/db-cerrar_sesion.php">Cerrar Sesión</a></li>
        <li><a href="./perfil_usuario.php">Perfil</a></li>
      </ul>
    </nav>
  </header>
    <?php 
      include("./conexion-DB/conect.php");
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
        <button class="btn-pass"><a href="./perfil_usuario.php"> Perfil</a></button>
        <p>Actualiza tu contraseña, escoge una más segura</p>
      </div>
      <div class="configuracion-right">
        <img class="img-avatar avatar-main" src="./imagenes/usuario_avatar.png" alt="avatar">
        <p><?php echo $datos['NOMBRE']." ".$datos['APELLIDO'];?></p>
      </div>
    </section>
    <form class="form" action="" method="post">
      <label for="actual" >Escribe tu contraseña actual:</label>
      <input type="password" value="" name="actual" placeholder="Contraseña actual" id="actual" >

      <label for="nueva" >Escribe tu nueva contraseña:</label>nueva
      <input type="password" value="" name="nueva" placeholder="Nueva contraseña" id="nueva">

      <label for="confirmar" >Confirma tu nueva contraseña:</label>
      <input type="password" value="" name="confirmar" placeholder="Confirmar contraseña" id="confirmar">

      <input type="submit" value="Actualizar contraseña" name="actualizar_pass">
    </form>
  </main>
  <footer class="footer ">
      <ul>
        <li><a href="">Aviso de privacidad</a> | <a href="">Términos y Condiciones</a></li>
      </ul>
  </footer>
  <?php
  // session_start();
  // $ID_usu=$_SESSION['ID'];
  // echo $ID_usu;
  // echo $datos['CLAVE'];

  if(isset($_POST["actualizar_pass"])){
    
    $actual= trim($_POST["actual"]);
    $nueva= trim($_POST["nueva"]);
    $confirmar= trim($_POST["confirmar"]);

    $consu_pass = "SELECT clave FROM cliente where id=$ID_usu";
    $pass= oci_parse($getConection, $consu_pass);
    oci_execute($pass);
    $dato_pass = oci_fetch_array($pass);
    $pass_actual= $dato_pass['CLAVE'];

    if($pass_actual == $actual){
      if($nueva == $confirmar){

        $sql = "UPDATE CLIENTE SET CLAVE = '$nueva' where ID = $ID_usu";
        $stmt= oci_parse($getConection, $sql);
      
        if (oci_execute($stmt)){
          ?>
          <div class="alert ok">
            <span class="check"></span>
            <h3>¡Clave actualizada correctamente!</h3>
          </div>
        <?php
        }else{
          ?>
          <div class="alert bad">
            <span></span>
            <h3>¡Ups ha ocurrido un error!</h3>
          </div>
        <?php
          
        }

      }else{
        ?>
        <div class="alert error">
          <span class="warning"></span>
          <h3>Las contraseñas no coinciden</h3>
        </div>
      <?php
      }
    }else{
      ?>
        <div class="alert bad">
          <span></span>
          <h3>¡Contraseña incorrecta!</h3>
        </div>
        <?php

    }
    
  }
?>
</body>
</html>