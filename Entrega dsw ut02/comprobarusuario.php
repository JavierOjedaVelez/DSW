<html>

<head>
    <title>Comprobar usuario</title>

</head>

<body>
    <form action="enviardatos.php" method="POST" />
    <h1>Tus Datos de suscripción: </h1>
    <p>Estos son los datos que nos has enviado:</p>

    <?php
    include "datosusuario.php";

    ?>

    <p>Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos.</p>
    <p>Los datos son correctos:
        <input type="submit" value="Enviar">
    </p>
    </form>

    <form action="sistemaventas.php" method="POST" />
    <p>Los datos no son correctos:
        <input type="submit" value="Volver">
    </p>
    </form>

</body>

</html>