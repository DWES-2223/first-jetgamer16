<?php

class EmpleadoTelefono extends Empleado
{
    /// resto del código


    public static function toHtml(Persona $p): string
    {
        if ($p instanceof Empleado) {
            // Aqui ya podemos acceder a las propiedades y métodos de Empleado

        }
    }
}