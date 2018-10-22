<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 16/09/2018
 * Time: 23:09
 */

namespace Controllers;

use \Core\Controller;
use Models\ConvenioDAO;
use Models\MedicoDAO;
use Models\PacienteDAO;

class HomeController extends Controller {

	public function index() {
		$dados = array(
		    'pacientes' => '',
            'medicos' => '',
            'convenios' => '',
            'consultas' => ''
        );
        $paciD = new PacienteDAO();

        $dados['pacientes'] = $paciD->contar();

        $medicD = new MedicoDAO();

        $dados['medicos'] = $medicD->contar();

        $convD = new ConvenioDAO();

        $dados['convenios'] = $convD->contar();


		$this->loadTemplate('home', $dados);
	}

} 