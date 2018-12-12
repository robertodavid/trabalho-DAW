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
use Models\UsuarioDAO;

class MedicoController extends Controller
{
    public function __construct()
    {
        $uD = new UsuarioDAO();
        $uD->verificarLogin();
    }

    public function index()
    {
        $dados = array(
            'medicos' => ''
        );


        $this->loadTemplate('medicos', $dados);
    }

    public function listar(){
        $dados = array(
            'medicos'=>''
        );
        $medicD = new MedicoDAO();

        $dados['medicos'] = $medicD->listar();


        $this->loadTemplate('m_lista', $dados);

    }

    public function add(){
        $dados = array(
            'medidos' => '',
            'msg' => ''
        );

        $this->loadTemplate('add_medico', $dados);
    }

}