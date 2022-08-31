<?php

    class Funcoes{
        public function tratarCaracter($valor, $tipo){
            switch($tipo){
                case 1: $rst = utf8_decode($valor);
                case 2: $rst = htmlentities($valor, ENT_QUOTES, "ISO-8859-1");break;
            }
            return $rst;
        }
        public function dataAtual($tipo){
            switch($tipo){
                case 1: $rst = date("Y-m-d");break;
                case 2: $rst = date("Y-m-D H:i:s");break;
                case 3: $rst = date("d/m/Y");break;
            }
            return $rst;
        }
        public function base64($tipo){
             switch($tipo){
                 case 1: $rst = base64_encode($tipo);break;
                 case 2: $rst = base64_decode($tipo);break;
             }
             return $rst;
        }

    } 


?>