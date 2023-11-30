<?php
class filme{

	private $titulo;
	private $codigo;
	private $sinopse;
	private $quantidade;
	private $trailer;


	public function __construct($titulo, $codigo, $sinopse, $quantidade, $trailer){
		$this->titulo = $titulo;
		$this->codigo = $codigo;
		$this->sinopse = $sinopse;
		$this->quantidade = $quantidade;
		$this->trailer = $trailer;

	}
	public function setTitulo($novoTitulo){
		$this->titulo = $novoTitulo;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function setCodigo($novoCodigo){
		$this->codigo = $novoCodigo;
	}
	
	public function getCodigo(){
		return $this->codigo;
	}

	public function setSinopse($novoSinopse){
		$this->sinopse = $novoSinopse;
	}

	public function getSinopse(){
		return $this->sinopse;
	}

	public function setQuantidade($novoQuantidade){
		$this->quantidade = $novoQuantidade;
	
	}
	public function getQuantidade(){
	  return $this->quantidade;

	}
	public function setTrailer($novoTrailer){
	$this->trailer = $novoTrailer;
	}

	public function getTrailer(){
		return $this->trailer;
	}


}














?>