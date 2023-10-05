<?php
class Empleado extends Persona {
private $sueldo;
private $telefonos = [];

    public function __construct($nombre, $apellidos, $edad, $sueldo) {
        parent::__construct($nombre, $apellidos, $edad);
        $this->sueldo = $sueldo;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }

    public function debePagarImpuestos(): bool {
        return $this->sueldo > 3333;
    }

    public function __toString(): string {
        $personaInfo = parent::__toString();
        $empleadoInfo = "Sou: " . $this->sueldo . "<br>" .
            "Telèfons: " . $this->listarTelefonos() . "<br>" .
            "Debe pagar impostos: " . ($this->debePagarImpuestos() ? "Sí" : "No") . "<br>";
        return $personaInfo . $empleadoInfo;
    }
}
