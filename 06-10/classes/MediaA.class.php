<?php
    class MediaA extends Media {

        public function getMedia() {
        return ($this->nota1 + $this->nota2)/2;
        }

        public function mostrarMedia ($tipo) {
        echo "<br>" . $tipo . ": ". $this->getMedia();
        }
    }
