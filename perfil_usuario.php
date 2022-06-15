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
        <li><img class="img-avatar avatar-header" src="./imagenes/usuario_avatar.png" alt="usuario"></li>
      </ul>
    </nav>
  </header>
  <main class="main">
    <section class="configuracion">
      <div class="configuracion-left">
        <h3>Configuración personal</h3>
        <button class="btn-pass">Cambiar contraseña <span><img src="./imagenes/candado.png" alt="candado"></span></button>
        <p>Verifica y/o actualiza tus datos personales aquí. Tus datos son importantes para un seguimiento clínico más completo.</p>
      </div>
      <div class="configuracion-right">
        <img class="img-avatar avatar-main" src="./imagenes/usuario_avatar.png" alt="avatar">
        <p>"---nombre-usuario---"</p>
      </div>
    </section>
    <form class="form" action="" method="post">
      <label for="nombre" >Nombre:</label>
      <input type="text" name="nombre" placeholder="Nombre" id="nombre" >
      <label for="nombre" >Apellido:</label>
      <input type="text" name="apellido" placeholder="Apellido" >
      <label for="nombre" >Telefono:</label>
      <input type="tel" name="telefono" placeholder="Telefono" >
      <label for="nombre" >Correo electronico:</label>
      <input type="email" name="email" placeholder="Correo electronico">
      <label for="nombre" >Fecha de nacimiento:</label>
      <input type="date" name="nacimiento" placeholder="DD/MM/YYYY">
      <label for="nombre" >Edad:</label>
      <input type="number" name="edad" placeholder="0">
      <label for="nombre" >Genero:</label>
      <select name="" id="" value="genero">
        <option value="">Hombre</option>
        <option value="">Mujer</option>
        <option value="">Otro</option>
      </select>
      <input type="submit" value="Guardar" name="guardar">
    </form>
  </main>
  <footer class="footer ">
      <ul>
        <li><a href="">Aviso de privacidad</a> | <a href="">Términos y Condiciones</a></li>
      </ul>
  </footer>
  
</body>
</html>