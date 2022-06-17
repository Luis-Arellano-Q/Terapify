 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="precio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <title>Psicologo Online - Ayuda Psicologica en Linea </title>
</head>
<body>
    <header>
        <div class="logo">
            <?php
                require_once("../conexion-DB/conect.php");
                $conex = new Conexion();
                $getConection = $conex->Conectar();
                session_start();
                $ID_usu=$_SESSION['ID'];
            ?>
            <a href="<?php if($ID_usu!=null){}else{ ?>index.php<?php } ?>"><img src="imagenes/logo.png" alt="logo de la compañia" class="logo-img"></a>
        </div>
        <nav>
            <a class="nav_menu" href="../Psicologos.php">Psicólogos</a>
            <!-- <a href="index.php">Inicio</a> -->
            <a class="nav_menu" href="">Precios</a>
            <?php
                if($ID_usu!=null){
                        ?>
                        <a href="../perfil_usuario.php"><img class="img-avatar avatar-main" src="../imagenes/usuario_avatar.png" alt="avatar"></a>
                        <?php
                }else{
                        ?>
                        <a href="../Iniciar_sesion.php" class="boton">Iniciar Sesion</a>
                        <?php
                    }
                

            ?>
            
         </nav>
    </header>
    <main>
        <section class="contenedor">
            
            <div class="precio">
                <h2 class=title>Videoconferencia de 60min</h2>                
                <p>✔ Conoceras al profesional del equipo que trabajara contigo.</p>
                <p>✔ Ampliaras la informacion sobre lo que te ocurre.</p>
                <p>✔ Se te hará una propuesta de tratamiento.</p>
                <h1>S/80</h1>
                <a href="../psicologos.php"><input type="submit" value="Lo quiero!!" class="button"></a>
                <div class="Compromiso">
                <h5>Compromiso de confidencialidad y garantia de calidad.</h5>
                </div>
            </div>
            <div class="precio">
                <h2 class=title>4 Videoconferencia de 60min</h2> 
                <p>✔ Conoceras al profesional del equipo que trabajara contigo.</p>
                <p>✔ Ampliaras la informacion sobre lo que te ocurre</p>
                <p>✔ Se te hará una propuesta de tratamiento.</p>
                <h1>S/280</h1>
                <a href="../psicologos.php"><input type="submit" value="Lo quiero!!" class="button"></a>
                <div class="Compromiso">
                <h5>Compromiso de confidencialidad y garantia de calidad.</h5>
                </div>
            </div>
            <div class="precio">
                <h2 class=title>Videoconferencia en pareja de 60min</h2> 
                <p>✔ Conoceras al profesional del equipo que trabajara contigo.</p>
                <p>✔ Ampliaras la informacion sobre lo que te ocurre</p>
                <p>✔ Se te hará una propuesta de tratamiento.</p>
                <h1>S/130</h1>
                <a href="../psicologos.php"><input type="submit" value="Lo quiero!!" class="button"></a>
                <div class="Compromiso">
                <h5>Compromiso de confidencialidad y garantia de calidad.</h5>
                </div>
            </div>
            <div class="precio">
                <h2 class=title>4 Videoconferencia en pareja de 60min</h2> 
                <p>✔ Conoceras al profesional del equipo que trabajara contigo.</p>
                <p>✔ Ampliaras la informacion sobre lo que te ocurre</p>
                <p>✔ Se te hará una propuesta de tratamiento.</p>
                <h1>S/520</h1>
                <a href="../psicologos.php"><input type="submit" value="Lo quiero!!" class="button"></a>
                <h5>Compromiso de confidencialidad y garantia de calidad.</h5>
                
            </div>
          
        </section>
        <section class="about-importante">
            <div class="contenedor-importante">
                <div class="content-importante">
                    <p>Importante: Los servicios disponibles a través de Terapify son proporcionados de forma independiente por profesionales en salud mental certificados. Terapify no proporciona ningún servicio de salud mental u otros de atención médica. Los profesionales en salud mental no pre-escriben medicamentos a través de Terapify. Si estás experimentando una crisis o emergencia, por favor comunícate a los servicios de emergencia más cercanos a tu localidad.</p>
            </div>
        </section>
        <footer>
            <div class="contenedor-footer">
                <div class="content-foo">
                    <h5>Aviso de privacidad</h5>
                    <h5>Terminos y condiciones</h5>
                    <h5>Trabaja con nosotros</h5>
                    <h5>Terapify Empresa</h5> 
                    <a href="citas@terapify.com">Atención a clientes: citas@terapify.com</a>
                </div>
                <div class="content-terminos">
                <h5>© 2022 Terapify Network, S.A.P.I. de C.V. Todos los derechos reservados.</h5>
                <a href="psicologos@terapify.com">Atención a psicólogos: psicologos@terapify.com</h5>
                </div>
            </div>
            
        </footer>

    </main>
    
</body>
</html>