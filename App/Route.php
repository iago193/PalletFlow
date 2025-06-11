<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['adicionarPaletes'] = array(
			'route' => '/adicionarPaletes',
			'controller' => 'indexController',
			'action' => 'adicionarPaletes'
		);

		$this->setRoutes($routes);
	}

}

?>