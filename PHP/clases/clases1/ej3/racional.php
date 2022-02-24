<?php
    class Racional{

        /**
         * @var
         */
        private $num;

        /**
         * @param $num
         */
        public function __construct($num){
            $this->num = $num;
        }

        public function __toString(){
            return 'Número: ' . $this->num;
        }
    }
?>