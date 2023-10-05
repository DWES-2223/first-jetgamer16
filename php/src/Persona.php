<?php
    class Persona {
        protected string $nombre;
        private string $cognoms;
        private int $edad;

        /**
         * @param string $nombre
         * @param string $apellidos
         * @param int $edad
         */
        public function __construct(string $nombre, string $apellidos, int $edad)
        {
            $this->nombre = $nombre;
            $this->cognoms = $apellidos;
            $this->edad = $edad;
        }

        public function getNombre(): string
        {
            return $this->nombre;
        }

        public function setNombre(string $nombre): void
        {
            $this->nombre = $nombre;
        }

        public function getCognoms(): string
        {
            return $this->cognoms;
        }

        public function setCognoms(string $cognoms): void
        {
            $this->cognoms = $cognoms;
        }

        public function getEdad(): int
        {
            return $this->edad;
        }

        public function setEdad(int $edad): void
        {
            $this->edad = $edad;
        }
        
        public function imprimir(){
            echo $this -> nombre;
            echo $this -> cognoms;
            echo $this -> edad;
        }

        public function __toString(): string {
            return "Nom: " . $this->nom . "<br>" .
                "Cognoms: " . $this->cognoms . "<br>" .
                "Edat: " . $this->edat . "<br>";
        }

    }