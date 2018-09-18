<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 16/09/2018
 * Time: 23:09
 */

namespace Controllers;
use \Core\Controller;
use Models\Usuario;
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

    public function addUsuario() {
        $dados = array(
            'aviso' => ''
        );

        $ud = new UsuarioDAO();
        $u = new Usuario();

        if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['username']) && !empty($_POST['username'] && isset($_POST['password']) && !empty($_POST['password'])){
            $nome = addslashes($_POST['nome']);
            $username = addslashes($_POST['username']);
            $password = md5(addslashes($_POST['password']));
            $lvlacesso = addslashes($_POST[lvlacesso]);

            $u->
            $u->setUsername($username);
            $u->setPassword($password);
            $u->setLvlAcesso($lvlacesso);
        }

        $dados['usuarios'] = $u->consulta();


        $this->loadTemplate('cadusuario', $dados);
    }



}