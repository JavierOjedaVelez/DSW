<?php

/*
function comprobarUsuario($tipo)
{
    $comprobarUserCheck = (isset($_POST[$tipo]) ? $_POST[$tipo] : null);
    if (!empty($comprobarUserCheck)) {
        return "<input type='checkbox' name='$tipo' checked disabled>";
    }
    return "<input type='checkbox' name='$tipo' disabled>";
}
*/
function validarCampos()
{
    
    $camposValidar = ['nombre', 'apellidos', 'contras', 'repeat', 'telefono','email', 'usuario'];

    foreach ($camposValidar as $campo) {
        if (!isset($_POST[$campo]) || empty($_POST[$campo])) {
            $_POST[$campo] = '';
        }
    }
}
