<?php

require "validarusuario.php";

validarCampos();

echo "<p>";
echo "Nombre: ";
echo $_POST['nombre'];
echo "<br/>";
echo "apellidos: ";
echo $_POST['apellidos'];
echo "<br/>";
echo "contraseña: ";
echo $_POST['contras'];
echo "<br/>";
echo "repetir contraseña: ";
echo $_POST['repeat'];
echo "<br/>";
echo "telefono: ";
echo $_POST['telefono'];
echo "<br/>";
echo "E-mail: ";
echo $_POST['email'];
echo "<br/>";

echo "<br/><br/>";
echo "Tipo de usuario: ";
echo $_POST['usuario'];
echo "<br/>";
