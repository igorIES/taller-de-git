<?php
// Autor: Igor imor2703@g.educaand.es
require('HolaMundo.php');

print "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
