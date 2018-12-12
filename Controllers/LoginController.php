<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 11/12/2018
 * Time: 19:08
 */
namespace Controllers;

use Core\Controller;
use Models\Usuario;
use Models\UsuarioDAO;

class LoginController extends Controller {
    public function __construct()
    {

    }

    public function index(){
        $dados = array('erro'=>'');

        $u = new Usuario();
        $uD = new UsuarioDAO();

        if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));

            $u->setEmail($email);
            $u->setPassword($senha);

            $dados['erro'] = $uD->logar($u);

        }

        $this->loadView('login', $dados);
    }

    public function sair(){
        $dados = array('erro'=>'');

        $uD = new UsuarioDAO();

        $dados['erro'] = $uD->logout();

        header("Location: ".BASE_URL);
    }


}