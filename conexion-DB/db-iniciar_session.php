<?php
  require_once("conect.php");
  $conex = new Conexion();
  $getConection = $conex->Conectar();

  if(isset($_POST["iniciar_sesion"])){
    
    $email= trim($_POST["email"]);
    $clave= $_POST["clave"];
    
    $consu = "SELECT ID FROM cliente where correo='$email'";
    $consul= oci_parse($getConection, $consu);
    if(oci_execute($consul)){
      $ID_consul= oci_fetch_array($consul);
      
      if(is_array($ID_consul)){
        $ID_usu = $ID_consul['ID'];

        if($ID_usu!=null){

          $sele = "SELECT correo, clave FROM cliente where id=$ID_usu";
          $result= oci_parse($getConection, $sele);
          oci_execute($result);
          $datos = oci_fetch_array($result);
          
          if ($datos['CORREO'] == $email && $datos['CLAVE'] ==$clave){
            session_start();
            $_SESSION['ID']=$ID_usu;
            header("location:perfil_usuario.php");
            
          }else{
            ?>
            <div class="alert bad">
              <span></span>
              <h3>¡Email o contraseña incorrecta!</h3>
            </div>
            <?php
          }
        }
      }
    }
  }
