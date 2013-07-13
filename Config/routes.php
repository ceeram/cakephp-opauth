<?php
$path = Configure::read('Opauth.path');
if (!$path) {
	$path = '/auth/';
}
Router::connect($path . '*', array('plugin' => 'opauth', 'controller' => 'opauth', 'action' => 'login'));