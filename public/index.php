<?php

require_once '../src/datos.php';
require_once '../src/validaciones.php';

$errores = [];
$resumen = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = limpiar($_POST["nombre"]);
    $apellidos = limpiar($_POST["apellidos"]);
    $dni = limpiar($_POST["dni"]);
    $email = limpiar($_POST["email"]);
    $telefono = limpiar($_POST["telefono"]);
    $fecha = limpiar($_POST["fecha"]);
    $provincia = limpiar($_POST["provincia"]);
    $sede = limpiar($_POST["sede"]);
    $departamento = limpiar($_POST["departamento"]);

    if (empty($nombre))
        $errores[] = "Nombre obligatorio";

    if (!validarDni($dni))
        $errores[] = "DNI incorrecto";

    if (!validarEmail($email))
        $errores[] = "Email incorrecto";

    if (!validarTelefono($telefono))
        $errores[] = "Teléfono incorrecto";

    if (empty($errores)) {
        $resumen = [
            "Nombre" => $nombre,
            "Apellidos" => $apellidos,
            "DNI" => $dni,
            "Email" => $email,
            "Teléfono" => $telefono,
            "Fecha Alta" => $fecha,
            "Provincia" => $provincia,
            "Sede" => $sede,
            "Departamento" => $departamento
        ];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Alta Empleado</title>
</head>
<body>

<h1>Alta de Empleados</h1>

<?php foreach($errores as $error): ?>
<p style="color:red"><?= $error ?></p>
<?php endforeach; ?>

<form method="post">

Nombre:
<input type="text" name="nombre"><br><br>

Apellidos:
<input type="text" name="apellidos"><br><br>

DNI:
<input type="text" name="dni"><br><br>

Email:
<input type="email" name="email"><br><br>

Teléfono:
<input type="text" name="telefono"><br><br>

Fecha Alta:
<input type="date" name="fecha"><br><br>

Provincia:
<select name="provincia">
<?php foreach($provincias as $p): ?>
<option><?= $p ?></option>
<?php endforeach; ?>
</select>

<br><br>

Sede:
<select name="sede">
<?php foreach($sedes as $s): ?>
<option><?= $s ?></option>
<?php endforeach; ?>
</select>

<br><br>

Departamento:
<select name="departamento">
<?php foreach($departamentos as $d): ?>
<option><?= $d ?></option>
<?php endforeach; ?>
</select>

<br><br>

<button type="submit">Registrar</button>

</form>

<?php if(!empty($resumen)): ?>

<h2>Empleado registrado</h2>

<ul>
<?php foreach($resumen as $campo => $valor): ?>
<li><b><?= $campo ?></b>: <?= $valor ?></li>
<?php endforeach; ?>
</ul>

<?php endif; ?>

</body>
</html>