<?php
  class Conexion {
    public function Conectar() {
      try {
        //code...
        $oracle = oci_connect("TERAPIFY", "terapify","localhost/XE");
        // var_dump($oracle);
        // echo "<br>.exito";
        return $oracle;
      } catch (Exception $e) {
        echo "Error: ".$e->getMessage();
      }
    }
  }

?>