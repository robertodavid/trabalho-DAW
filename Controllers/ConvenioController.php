<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 13:50
 */

namespace Controllers;

use Core\Controller;
use Models\ConvenioDAO;

class ConvenioController extends Controller
{
    public function index()
    {
        $dados = array(
            'convenios' => ''
        );

        $convD = new ConvenioDAO();

        $dados['convenios'] = $convD->listar();


        $this->loadTemplate('convenio', $dados);
    }
}