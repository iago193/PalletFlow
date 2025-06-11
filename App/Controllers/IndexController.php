<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

use App\Models\Paletes;

class IndexController extends Action {

	public function index() {
		$palete = Container::getModel('Paletes');

		$this->view->paletesUser = $palete->getPaletes();

		$this->render('index');
	}


	public function adicionarPaletes() {

		if (
			empty($_POST['carregoNumero']) ||
			empty($_POST['conferente']) ||
			empty($_POST['motorista']) ||
			empty($_POST['placa']) ||
			empty($_POST['quantidade'])
		) {

			echo "Todos os campos são obrigatórios.";
			return;
		}

		$palete = Container::getModel('Paletes');
		$palete->__set('carrego', $_POST['carregoNumero']);
		$palete->__set('conferente', $_POST['conferente']);
		$palete->__set('motorista', $_POST['motorista']);
		$palete->__set('placa', $_POST['placa']);
		$palete->__set('quantidade', $_POST['quantidade']);

		$palete->addPaletes();

		header('Location: /');
		exit;
	}

}


?>