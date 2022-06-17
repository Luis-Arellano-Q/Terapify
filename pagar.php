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
  // echo $ID_usu;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Terapify</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style-pago.css">
</head>
<body>
  <header class="header">
    <div>
      <a href="./Pagina web/index.php">
        <img src="./Pagina web/imagenes/logo.png" alt="logo de la compañia" class="logo-img">
      </a>    
    </div>
  </header>
  <div class="container-info">
    <p>Muy bien, <span><?php echo $datos['NOMBRE'];?></span>.<br> 
Ya sólo tienes que realizar el pago de tu cita con <span>--psicólogo--</span> para poder llevarla a cabo.</p>
  </div>
  <main class="main">
    <section class="detalle-cita">
      <h3>Detalle de tu cita</h3>
      <div class="card-dato-cita card-pago">
        <p>Psicologo</p>
        <p>-nombre psicologo-</p>
        <p>Fecha de tu cita</p>
        <p>-fecha-</p>
        <span class="division-cards"></span>
        <p>Duracion</p>
        <p>-tiempo-</p>
      </div>
    </section>
    <section class="metodo-pago">
      <h3>Metodo de pago</h3>
      <div class="card-dato-metodo card-pago">
        <label for="tarjeta"><img src="./imagenes/logo-tarjeta-pago.jpg" alt=""></label>
        <input type="checkbox" name="tarjeta" id="tarjeta">
      </div>
    </section>
    <section class="detalle-pago">
      <h3>Detalle de tu pago</h3>
      <div class="card-dato-pago card-pago">
        <p>Cita individual</p>
        <p>*Precio*</p>
        <span class="division-cards"></span>
        <input type="text"><input type="submit" value="Validar" name="cupon">
        <span class="division-cards"></span>
        <p>Total</p>
        <p>*Precio*</p>
      </div>
    </section>
    <section class="detalle-tarjeta">
      <h3>Agregar tarjeta</h3>
      <div class="card-dato-tarjeta card-pago">
        <form class="form" action="" method="post">
          <label for="nom_tarjeta">Nombre del propietario</label>
          <input type="text" name="nom_tarjeta" placeholder="Nombre Propietario" required id="nom_tarjeta">

          <label for="num_tarjeta">Numero de tarjeta</label>
          <input type="number" maxlenght="16" name="num_tarjeta" placeholder="Numero de tarjeta" required id="num_tarjeta">

          <label for="fecha_ven">Fecha de vencimiento</label>
          <input type="number" name="mes" id="fecha_ven" placeholder="Mes" required id="fecha_ven">
          <input type="number" placeholder="Año" name="anio" required id="fecha_ven">

          <label for="cvc">Código de seguridad</label>
          <input type="number" name="cvc" id="cvc" placeholder="CVC" required>
          <div class="terminos">
          <input type="submit" value="Pagar" name="pagar">
        </form>
      </div>
    </section>
    
  </main>
  <footer class="footer ">
    <div class="container">
      <div>
        <ul>
          <li><a href="">Aviso de privacidad</a></li>
          <li><a href="">Términos y Condiciones</a></li>
        </ul>
        <a href="">Atención a clientes: citas@terapify.com</a>
      </div>
      <h6>&copy;2022 Terapify. Todos los derechos reservados</h4>
    </div>
  </footer>
  <?php
  if(isset($_POST["pagar"])){

    $nom_tarjeta= trim($_POST["nom_tarjeta"]);
    $num_tarjeta= trim($_POST["num_tarjeta"]);
    $mes= trim($_POST["mes"]);
    $anio= trim($_POST["anio"]);
    $cvc= trim($_POST["cvc"]);

    // $consu = "SELECT correo FROM cliente where correo='$email'";
    // $consul= oci_parse($getConection, $consu);
    // oci_execute($consul);

    // $ID_consul= oci_fetch_array($consul);
    // $email_usu=$ID_consul['CORREO'];


    // if($email_usu==$email){
    //   echo "ya esta registrado";
    // }   
    // else{  
      $sql = "INSERT INTO DETALLE_TARJETA VALUES (NULL,$num_tarjeta,TO_DATE('$mes."/".$anio','MM/YYYYY'),$cvc,$ID_cita,$ID_usu,$nom_tarjeta)";
      $stmt= oci_parse($getConection, $sql);
        
      if (oci_execute($stmt)){
        echo "Pago realizado";
      }else{
        echo "error";
      }
    }
  // }
?>
</body>
</html>