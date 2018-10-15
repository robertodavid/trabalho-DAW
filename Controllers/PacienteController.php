<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:14
 */

namespace Controllers;


use Core\Controller;
use Models\PacienteDAO;

class PacienteController extends Controller
{
    public function index()
    {
        $dados = array(
            'pacientes' => ''
        );

        $paciD = new PacienteDAO();

        $dados['pacientes'] = $paciD->listar();


        $this->loadTemplate('paciente', $dados);
    }


}