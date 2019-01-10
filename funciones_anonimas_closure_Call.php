<?php  

// version: php7

// Closure::call() manera mas eficiente y abreviada de vincular temporalmente un ambito de objeto a un cierre e invocarlo

// vincula temporalmente el cierre a newthis y lo llama con cualquier parametro dado

// este sustituye al bind y bind_to

// se entiende como funcion anonima dentro de otra funcion, o como callback de funcion

class Valor{
	protected $valor;

	public function __construct($valor)
	{
		$this->valor = $valor;
	}
	public function getValor()
	{
		return $this->valor;
	}
}

$tres = new Valor(3);
$cinco = new Valor(5);

// aqui el uso de la funcion anonima:
$cierre = function($numero){ var_dump($this->getValor()+$numero); };

$cierre->call($tres,10);
$cierre->call($cinco,10);

?>