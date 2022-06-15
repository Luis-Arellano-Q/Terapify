<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Psicologo Online - Ayuda Psicologica en Linea </title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./style-log_in.css">
</head>
<body>
  <header class="header">
    <div>
      <img src="assets/world.png" alt="logo">
      <h1><a href="index.php">Terapify</a></h1>
    </div>
  </header>
  <main class="main">
    <form class="form" action="" method="post">
      <h2>Registrarse</h2>
      <input type="text" name="nombre" placeholder="Nombre" required>
      <input type="text" name="apellido" placeholder="Apellido" required>
      <input type="tel" name="telefono" placeholder="Telefono" required>
      <input type="email" name="email" placeholder="Correo electronico" required>
      <input type="password" name="clave" placeholder="Contraseña" required>
      <div class="terminos">
      <input class="check" type="checkbox" name="terminos" id="terminos" required><label for="terminos" name="terminos">Declaro que soy mayor de edad y acepto el <a  href="">Aviso de privacidad</a>  y los <a href="">Términos y condiciones de uso </a> de Terapify.</label>
      </div>
      
      <input type="submit" value="Crear una cuenta" name="crear_cuenta">
    </form>
    <div>
      <img src="./imagenes/login-image.webp" alt="">
    </div>
  </main>
  <footer class="footer ">
    <div class="aviso_footer">
      <p>Importante: Los servicios disponibles a través de Terapify son proporcionados de forma independiente por profesionales en salud mental certificados. Terapify no proporciona ningún servicio de salud mental u otros de atención médica. Los profesionales en salud mental no pre-escriben medicamentos a través de Terapify. Si estás experimentando una crisis o emergencia, por favor comunícate a los servicios de emergencia más cercanos a tu localidad.</p>
    </div>
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