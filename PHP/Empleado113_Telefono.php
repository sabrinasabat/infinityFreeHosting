<?php
    /*Copia la clase del ejercicio 112 y modificala.
    Añade una propiedad privada que almacene una matriz
    de números de teléfonos. Añade los métodos seguientes:

    public function anadirTelefon(int $telefono) : void
    Añade un telefono a la matriz

    public function listarTelefons(): string
    Muestra los teléfonos separados por comas

    public function vaciarTlefons(): void
    Elimina todos los teléfonos*/
class Empleado
{
    private $nombre;
    private $apellido;
    private $sueldo;
    private $telefonos=[];

    public function __construct($nombre, $apellido, $sueldo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sueldo = $sueldo;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido(): string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;
    }

    public function getSueldo(): float
    {
        return $this->sueldo;
    }

    public function setSueldo(float $sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function getNombreCompleto(): string
    {
        return $this->nombre . " " . $this->apellido;
    }

    public function getTelefonos(): array{
        return $this->telefonos;
    }

    public function debePagarImpuestos(): bool
    {
        return $this->sueldo > 3333;
    }

    public function anadirTelefono(int $telefono) : void{
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos() : string{
        return implode(", ", $this->telefonos);
    }

    public function vaciarTelefonos() : void{
        $this->telefonos = [];
    }

}


?>
