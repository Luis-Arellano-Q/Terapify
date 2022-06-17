<?php
  require_once("conect.php");
  $conex = new Conexion();
  $getConection = $conex->Conectar();

  // while ($row = oci_fetch_assoc($stmt)){
  //   echo "<br>".$row["NOMBRE"]."==".$row["ID"];
  // }



  if(isset($_POST["crear_cuenta"])){

    $name= trim($_POST["nombre"]);
    $apellido= trim($_POST["apellido"]);
    $celular= trim($_POST["telefono"]);
    $email= trim($_POST["email"]);
    $clave= $_POST["clave"];

    $consu = "SELECT correo FROM cliente where correo='$email'";
    $consul= oci_parse($getConection, $consu);
    oci_execute($consul);

    $ID_consul= oci_fetch_array($consul);
    $email_usu=$ID_consul['CORREO'];


    if($email_usu==$email){
      ?>
      <div class="alert error">
        <span class="warning"></span>
        <h3>El email ya ha sido registrado</h3>
      </div>
    <?php
    }   
    else{  
      $sql = "INSERT INTO CLIENTE VALUES (NULL,'$name','$apellido',NULL,'$email',$celular,NULL,'$clave',NULL)";
      $stmt= oci_parse($getConection, $sql);
        
      if (oci_execute($stmt)){
        ?>
        <div class="alert ok">
          <span class="check"></span>
          <h3>¡Te has registrado correctamente!</h3>
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
    }
  }
?>