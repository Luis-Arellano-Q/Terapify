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
    <p>Muy bien, <span>--paciente.---</span><br> 
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
          <label for="nombre-tarjeta">Nombre del propietario</label>
          <input type="text" name="nombre-tarjeta" placeholder="Nombre Propietario" required>
          <label for="nombre-tarjeta">Numero de tarjeta</label>
          <input type="number" maxlenght="16" name="numero_tarjeta" placeholder="Numero de tarjeta" required>
          <label for="fecha_ven">Fecha de vencimiento</label>
          <input type="" name="fecha_ven" id="fecha_ven" placeholder="MM/AA" required>
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
  
</body>
</html>