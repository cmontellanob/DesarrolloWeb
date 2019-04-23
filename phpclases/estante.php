<?php
class estante {
	private $fila1=array();
	private $fila2=array();
	private $fila3=array();
	private $tope1;
	private $tope2;
	private $tope3;	

    public function  __construct() {
		
		$this->tope1=0;
		$this->tope2=0;
		$this->tope3=0;

	}
	public function  insertarLibro($fila,$libro)
	{
		switch ($fila) 
		{
				case 1:
					$this->fila1[$this->tope1]=$libro;
					$this->tope1++;
					break;
				case 2:
					$this->fila2[$this->tope2]=$libro;
					$this->tope2++;
					break;
				case 3:
					$this->fila3[$this->tope3]=$libro;
					$this->tope3++;
					break;
				default:
					echo "No Existe Fila";
					break;
			}
	}
	public function  eliminarLibro($fila) 
	{
		switch ($fila) 
		{
			case 1:
				if($this->tope1==0){
					echo"el estante  esta vacio";
				}
				else{
					$this->tope1--;
					return $this->fila1[$this->tope1];
				}
				break;
			case 2:
				if($this->tope2==0){
					echo "el estante  esta vacio";
				}else{
					$this->tope2--;
					return $this->fila2[$this->tope2];
				}
				break;
			case 3:
				if($this->tope3==0){
					echo"el estante  esta vacio";
				}else{
					$this->tope3--;
					return $this->fila3[$this->tope3];
				}
				break;
			default:
				echo "no existe fila";
				break;
			}	
	}

	public function  mostrar($fila) {
		
		switch ($fila) {
			case 1:
				for($i=0; $i<$this->tope1; $i++)
				{
					echo $this->fila1[$i];
				}
				break;
			case 2:
				for($i=0; $i<$this->tope2; $i++)
				{
					echo $this->fila2[$i];
				}
				break;
			case 3:
				for($i=0; $i<$this->tope3; $i++)
				{
					echo $this->fila3[$i];
				}
				break;
			default:
				echo "La fila no existe";
				break;
		}
		
	}
	public function  mostrarArmario() {
		echo "fila1";

		for ($i=0; $i < $this->tope1; $i++) { 
			echo $this->fila1[$i];
		}
		echo "<br/>fila2";
		for ($i=0; $i < $this->tope2; $i++) { 
			echo $this->fila2[$i];
		}
		echo "<br/>fila3";
		for ($i=0; $i < $this->tope3; $i++) { 
			echo $this->fila3[$i];
		}
		
	}
   
}   
?>
