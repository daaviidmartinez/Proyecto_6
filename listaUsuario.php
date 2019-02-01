<?php
$conexion = new mysqli("localhost", "root", "", "juegos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <title></title>
        <link rel="stylesheet" href="estilos.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>

    <ul>
      <li><a class="active" href="index.php">Inicio</a></li>
      <li><a href="listadoUsuarios.php">Jugadores</a></li>
    </ul>

    <div>
  <table>
    <br>
    <tr>
        <td style="background-color:#2E64FE; text-align:center;"><b>ID</b></td>
        <td style="background-color:#2E64FE;text-align:center;"><b>Nombre</b></td>
        <td style="background-color:#2E64FE; text-align:center;"><b>Apellidos</b></td>
        <td style="background-color:#2E64FE;text-align:center;"><b>Edad</b></td>
        <td style="background-color:#2E64FE; text-align:center;"><b>Curso</b></td>
        <td style="background-color:#2E64FE;text-align:center;"><b>Puntuación</b></td>

    </tr>
    <?php
    foreach ($resultado as $usuario) {
      echo "<tr>";
      echo "<td style=text-align:center;>".$usuario['id']."</td>";
          echo "<td style=text-align:center;>".$usuario['nombre']."</td>";
          echo "<td style=text-align:center;>".$usuario['apellidos']."</td>";
          echo "<td style=text-align:center;>".$usuario['edad']."</td>";
          echo "<td style=text-align:center;>".$usuario['curso']."</td>";
          echo "<td style=text-align:center;>".$usuario['puntuacion']."</td>";
      echo "</tr>";
    } ?>
  </table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


  </body>
</html>
