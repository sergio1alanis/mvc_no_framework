<?php
// requiere una vez el archivo config.php
require_once 'config.php';

require_once 'controlador/index.php';


if(isset($_GET['page'])):
	if(method_exists("modeloController", $_GET['page'])):
	 modeloController::{$_GET['page']}();
	endif;
else:
modeloController::index();
endif;
