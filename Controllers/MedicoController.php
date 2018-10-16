<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 14:31
 */

namespace Controllers;


use Core\Controller;
use Models\MedicoDAO;

class MedicoController extends Controller
{
    public function index()
    {
        $dados = array(
            'medicos' => ''
        );

        $medicD = new MedicoDAO();

        $dados['medicos'] = $medicD->listar();


        $this->loadTemplate('medico', $dados);
    }


}