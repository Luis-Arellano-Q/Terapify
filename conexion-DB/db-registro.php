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
      echo "ya esta registrado";
    }   
    else{  
      $sql = "INSERT INTO CLIENTE VALUES (NULL,'$name','$apellido',NULL,'$email',$celular,NULL,'$clave',NULL)";
      $stmt= oci_parse($getConection, $sql);
        
      if (oci_execute($stmt)){
        ?>
        <div class="alert ok">
          <img src="assets/check.png" alt="">
          <h3>¡Te has registrado correctamente!</h3>
        </div>
        <?php
      }else{
        ?>
        <div class="alert bad">
          <img src="assets/wrong.png" alt="">
          <h3>¡Ups ha ocurrido un error!</h3>
        </div>
        <?php
      }
    }
  }
?>