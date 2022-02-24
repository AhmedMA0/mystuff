<?php
    class Factura{

        /**
         *
         */
        public const IVA=21;
        /**
         * @var
         */
        private $importeBase;
        /**
         * @var
         */
        private $fecha;
        /**
         * @var
         */
        private $impuestos;
        /**
         * @var
         */
        private $importeBruto;
        /**
         * @var
         */
        private $estado;

        /**
         * @param $importeBase
         * @param $fecha
         * @param $impuestos
         * @param $importeBruto
         * @param $estado
         */
        public function __construct($importeBase, $fecha, $impuestos, $importeBruto, $estado)
        {
            $this->importeBase = $importeBase;
            $this->fecha = $fecha;
            $this->impuestos = $impuestos;
            $this->importeBruto = $importeBruto;
            $this->estado = $estado;
        }

        public function __toString(){
            return 'Importe base: ' . $this->importeBase . ' Fecha: ' . $this->fecha . ' Impuestos: ' . $this->impuestos . ' Importe Bruto: ' . $this->importeBruto . ' Estado: ' . $this->estado . '<br>';
        }

    }
?>