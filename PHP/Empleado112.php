<?php
    class Empleado
    {
        private $nombre;
        private $apellido;
        private $sueldo;

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
            return $this->nombre ." ". $this->apellido;
        }

        public function debePagarImpuestos(): bool
        {
            return $this->sueldo > 3333;
        }
    }

?>
