<?php
namespace Controllers;

use \Core\Controller;
use Models\UsuarioDAO;

class NotfoundController extends Controller {

    public function __construct()
    {
        $uD = new UsuarioDAO();
        $uD->verificarLogin();
    }

    public function index() {
		$this->loadView('404', array());
	}

}