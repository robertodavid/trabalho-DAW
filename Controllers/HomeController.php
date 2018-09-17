<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 16/09/2018
 * Time: 23:09
 */

namespace Controllers;

use \Core\Controller;

class HomeController extends Controller {

	public function index() {
		$dados = array();


		$this->loadTemplate('home', $dados);
	}

} 