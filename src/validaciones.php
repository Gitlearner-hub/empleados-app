<?php

function limpiar($dato)
{
    return htmlspecialchars(trim($dato));
}

function validarDni($dni)
{
    return preg_match('/^[0-9]{8}[A-Za-z]$/', $dni);
}

function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validarTelefono($telefono)
{
    return preg_match('/^[0-9]{9}$/', $telefono);
}