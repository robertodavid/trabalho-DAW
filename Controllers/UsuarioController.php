<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 16/09/2018
 * Time: 23:09
 */

namespace Controllers;
use \Core\Controller;
use Models\UsuarioDAO;

class UsuarioController extends Controller
{
    public function index() {
        $dados = array(
            'usuarios' => ''
        );

        $u = new UsuarioDAO();

        $dados['usuarios'] = $u->consulta();


        $this->loadTemplate('usuario', $dados);
    }



}