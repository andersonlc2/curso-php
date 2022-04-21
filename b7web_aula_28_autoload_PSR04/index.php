<?php
require "autoload.php";

use \matematica\MatematicaBasica;
use \fotos\Upload;

$m = new MatematicaBasica();
echo $m->somar(10, 20);

$f = new Upload();
