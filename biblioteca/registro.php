<?php
  $user = "root";
  $pass = "";
  $host = "localhost";

  $connection = mysqli_connect($host, $user, $pass);


  $nombre_usuario = $_POST["nombre_usuario"];
  $correo = $_POST["correo"];

  $nombre = $_POST["nombre"];
  $autor = $_POST["autor"];
  $categoria = $_POST["categoria"];
  $fecha = $_POST["fecha"];
  $usuario = $_POST["usuario"];

  if(!$connection){
    echo "No se ha podido conectar" . mysql_error();
  }else{
    echo "<b><h3>Conexion Exitosa</h3></b>";
  }

  $datab = "biblioteca";
  $db = mysqli_select_db($connection,$datab);

  if(!$db){
    echo "No se ha encontrado la tabla";
  }else{
    echo "<h3>Registro exitoso</h3>";
  }

  $instruccion_sql = "INSERT INTO usuario (nombre_usuario, correo)
                      VALUES ('$nombre_usuario', '$correo')";

  $instru_sql = "INSERT INTO libro (nombre, autor, categoria, fecha, usuario)
                                          VALUES ('$nombre', '$autor', '$categoria', '$fecha', '$usuario')";


  $resultado = mysqli_query($connection,$instruccion_sql);
  $result = mysqli_query($connection,$instru_sql);

?>
