<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perfil.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
            <?php

    use LDAP\Result;

            require_once("../conexion-DB/conect.php");
            $conex = new Conexion();
            $getConection = $conex->Conectar();
            session_start();
            $ID_usu=$_SESSION['ID'];
            ?>
            <a href="<?php if($ID_usu!=null){}else{ ?>./Pagina web/index.php<?php } ?>">

                <img src="imagenes/logo.png" alt="logo de la compañia" class="logo-img">
            </a>
        </div>
        <nav>
            <a class="nav_items" href="../Psicologos.php">Psicólogos</a>
            <a class="nav_items" href="./precio.php">Precios</a>
            <?php
            if($ID_usu!=null){
                ?>
                <a class="psico" href="../perfil_usuario.php">
                <img class="img-avatar avatar-main psico_avatar" src="../imagenes/usuario_avatar.png" alt="avatar"></a>
                <?php
            }else{
                ?>
                <a href="./Iniciar_sesion.php" class="boton">Iniciar Sesion</a>
                <?php
            }
            ?>
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
    <main>
        <section class="Contenedor">
            
            <a href="" class="button">Agendar cita</a>
            <div class="perfil">
                 <img src="../imagenes/usuario_avatar.png">
                 <div class="datos">
                    <h3><?php echo $datos['NOMBRE']." ".$datos['APELLIDO'];?></h3>
                    <p><b>Idiomas:</b> Español</p>
                    <p><b>Pais:</b> Peru</p>
                    <p><b>Especialidad: </b><?php echo $datos['ESPECIALIDAD'];?></p>
                    <p><b>Cedula: </b><?php echo $datos['CEDULA'];?></p>
                 </div> 
            </div>
            
            <div class="area_de_atencion">
                <div class="atencion">
                <h3>Área de atención</h3>
                <p>-Ansiedad</p>
                <p>-Autocuidado</p>
                <p>-Depresion</p>
                <p>-Terapia en pareja</p>
                <p>-Conflicto en pareja</p>
                <p>-Miedos y fobias</p>
                </div>
            </div>

            <div class="formacion">
                
                <div class="formacion_academica">
                <h3>Formación academica</h3>
                    <p>Posgrado de especialización en psicoterapia cognitiva<br>
                        Fundación Aiglé, Rosario Santa Fe.<br>  
                        Two week intensive training program study and work.<br>
                        The Ackerman Institute for the family, New York, USA.<br>
                        Curso de PNL -programación neurolingüística- “El modelo de cambio”<br>
                        Fernando Rossi<br>
                        Licenciatura en psicología<br>
                        Universidad Católica de Santa Fe</p>
                </div>  
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