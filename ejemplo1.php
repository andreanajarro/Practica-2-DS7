<form method="POST">
  Introduce tu nombre: <input type="text" name="nombre">
  Introduce la edad: <input type="text" name="edad">
  <input type="submit" value="Enviar">
</form>

<?php
if ($_POST) {
    foreach ($_POST as $clave => $valor) {

        // Si es el nombre, formatearlo
        if ($clave == "nombre") {
            $valor = ucfirst(strtolower($valor));
        }

        echo "El valor de $clave es: $valor <br>";
    }
}
?>