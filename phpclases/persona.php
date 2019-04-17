<?php
class persona
{
	private $nombre;

    function  __construct($nombre2) {
		
		$this->nombre=$nombre2;
	}
	function  set_nombre($nombre2) {
		
		$this->nombre=$nombre2;
	}

	
    public function get_nombre() {
     return $this->nombre;
   }
   
   public static function Factorial($n){
   $f=1;
   for ($i=1;$i<=$n;$i++)
   	{$f*=$i;}
   		return $i;	
   	}
   
}   

 ?>
