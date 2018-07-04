<?php

namespace Controller;

use Model\Estado;

class EstadosController{

	public function listar(){

		//acesso ao modelo
		$estado = new Estado();

		//Manipular os dados

		$lista = $estado->all();

		//Invocar a View
		include './view/estados/lista.php';

	}

	public function create() {

		include './view/estados/create.php';

	}

  	public function store($request) {

    	$nome = $request['nome'];
    	$sigla = $request['sigla'];
    	$estado = new Estado();
    	$estado->insert($nome, $sigla);
  }

	
}