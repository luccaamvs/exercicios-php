<?php
    require_once('../interfaces/ImediaGeo.inter.php');

    class mediaGeo implements ImediaGeo{

        public $notas;
        public $nome;

        public function setDados($vals, $nom) {
            $this-> nome = nom;
            
            $i = 0;
            
            foreach($vals as $v){
                $this->notas[$i] = $v;
                $i++;
            }
        }

        public function getMediaGeo ( )
        {   $media = 1;
            $i = 0;

             foreach($this-> notas as $v){
                $media *= $v;
                $i++;
             }
              $raiz = 1/ $i++;
             return ( pow ( $media , $raiz) ) ;
        }

        public function mostrarMedia ($tipo) {

        echo "<br>" . $tipo . ": ". $this->getMediaGeo();
        }
    }


    $mg = new mediaGeo();

     $x = array(1, 5, 7); 

     $mg-> setDados($x, "Lucca");

     echo mg->mostrarMedia;
