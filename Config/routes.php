<?php
$path = Configure::read('Opauth.path');
Router::connect($path . '*', array('plugin' => 'opauth', 'controller' => 'opauth', 'action' => 'login'));