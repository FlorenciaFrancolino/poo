<?php
class personas {

		public $nombre;
		public $apellido;
		
		function hablar (){
			 echo "estoy hablando";
			
		}
	}

$p= new personas ();
$p->nombre= "micaela";
$p-> apellido="varavalle";

$p1->nombre="juan";
$p1->apellido="perez";
echo "hola ". $p->nombre . "<br>";
echo "hola ". $p1->nombre . "<br>";

$p->hablar();