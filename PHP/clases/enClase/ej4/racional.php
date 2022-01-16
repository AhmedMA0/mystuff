<?php
    class RacionalCompleto{

        /**
         * @var
         */
        private $num;

        /**
         * @param $num
         */
        public function __construct($algo = null, $algo2 = null){
            
            if ($algo == null) {
                $this->num = '1/1';
            }

            elseif (is_string($algo)) {
                $this->num = $algo;
            }
            
            else {
                
                if ($algo2 == null) {
                    $this->num = $algo.'/1';
                }

                else {
                    $this->num = $algo.'/'.$algo2;
                }
            }
        }

        public function __toString(){
            return 'Número: ' . $this->num;
        }
    }
?>