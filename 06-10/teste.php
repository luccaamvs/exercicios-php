<?php 
    require_once("classes/Media.class.php");
    require_once("classes/MediaG.class.php");
    require_once("classes/MediaA.class.php");

    $m = new MediaG; $m->setNotas(4,6); $m->mostrarMedia("Geométrica");
    $A = new MediaA; $A->setNotas(8,6); $A->mostrarMedia("Aritmética");