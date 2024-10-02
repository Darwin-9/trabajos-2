<?php

    class Operaciones{

        public $numeroUno;
        public $numeroDos;
        public $suma;
        public $resta;
        public $multiplicacion;
        public $division;

        public function sumar($numeroUno,$numeroDos){
            $this->suma=$numeroUno + $numeroDos;
            return $this->suma;
        }

        public function multiplicar($numeroUno,$numeroDos){
            $this->multiplicacion=$numeroUno * $numeroDos;
            return $this->multiplicacion;
        }

        public function restar($numeroUno,$numeroDos){
            $this->resta=$numeroUno - $numeroDos;
            return $this->resta;
        }

        public function dividir($numeroUno,$numeroDos){
            $this->division=$numeroUno / $numeroDos;
            return $this->division;
        }
    }

?>