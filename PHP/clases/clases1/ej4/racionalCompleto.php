<?php
    class RacionalCompleto{

        /**
         * @var
         */
        private $num;

        /**
         * @param $num
         */
        public function __construct($nume = null, $deno = null){

            if ($nume == null) {
                $this->num = '1/1';
            }

            elseif (is_string($nume)) {
                $this->num = $nume;
            }

            else {

                if ($deno == null) {
                    $this->num = $nume.'/1';
                }

                else {
                    $this->num = $nume.'/'.$deno;
                }
            }
        }

        public function __toString(){
            return 'Número: ' . $this->num;
        }
    }
?>