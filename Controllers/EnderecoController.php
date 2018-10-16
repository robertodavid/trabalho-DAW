<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:59
 */

namespace Controllers;


use Core\Controller;
use Models\EnderecoDAO;

class EnderecoController     extends Controller
{
    public function index()
    {
        $dados = array(
            'enderecos' => ''
        );

        $endD = new EnderecoDAO();

        $dados['enderecos'] = $endD->listar();


        $this->loadTemplate('endereco', $dados);
    }


}