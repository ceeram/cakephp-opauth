<?php

App::uses('AppController', 'Controller');

class OpauthController extends AppController {

	public $uses = array();

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login');
	}

	public function login() {
		$Opauth = new \Opauth\Opauth(Configure::read('Opauth'));
		$response = $Opauth->run();
		$this->Auth->login($response->info);
		$this->redirect('/');
	}
}
