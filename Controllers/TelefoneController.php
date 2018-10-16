<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:27
 */

namespace Controllers;


use Core\Controller;
use Models\TelefoneDAO;

class TelefoneController extends Controller
{
    public function index()
    {
        $dados = array(
            'telefones' => ''
        );

        $teleD = new TelefoneDAO();

        $dados['telefones'] = $teleD->listar();


        $this->loadTemplate('telefone', $dados);
    }


}