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
{public function __construct()
{
    $uD = new UsuarioDAO();
    $uD->verificarLogin();
}


    public function index() {
        $dados = array(
            'usuarios' => ''
        );

        $ud = new UsuarioDAO();

        $dados['usuarios'] = $ud->listar();


        $this->loadTemplate('usuarios', $dados);
    }

    public function add() {
        $dados = array(
            'msg' => ''
        );

        $ud = new UsuarioDAO();
        $u = new Usuario();

        if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $password = md5(addslashes($_POST['password']));

            $u->setNome($nome);
            $u->setEmail($email);
            $u->setPassword($password);


            if(!$ud->emailExiste($u)){


                $dados['msg'] = $ud->inserir($u);

            }else{
                $dados['msg'] = "Usuário já consta no sistema";
            }


        }

        $dados['msg'] ="";


        $this->loadTemplate('add_usuario', $dados);
    }

    public function edit() {
        $dados = array(
            'msg' => '',
            'usuario' =>''
        );

        $ud = new UsuarioDAO();
        $u = new Usuario();

        if(isset($_POST['id_user']) && !empty($_POST['id_user']) && isset($_POST['nome']) && !empty($_POST['nome'])
            && isset($_POST['email']) && !empty($_POST['email'])){
            $id_user = addslashes($_POST['id_user']);
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $levelacesso = addslashes($_POST['lvlacesso']);

            $u->setIdUser($id_user);
            $u->setNome($nome);
            $u->setEmail($email);
            $u->setLvlAcesso($levelacesso);

            $ret = $ud->update($u);

            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password = md5(addslashes($_POST['password']));
                $u->setPassword($password);
                $ret = $ud->updateSenha($u);
            }

            $u->setIdUser($id_user);
            $u->setNome($nome);
            $u->setEmail($email);
            $u->setLvlAcesso($levelacesso);

            $ret = $ud->update($u);
        }

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id_user = addslashes($_GET['id']);


            $u->setIdUser($id_user);

            if($ud->idExiste($u)){

                $dados['usuario'] = $ud->getUsuario($u);


            }else{
                $dados['msg'] = "Usuário já consta no sistema";
            }


        }

        $dados['msg'] ="";


        $this->loadTemplate('editusuario', $dados);
    }



}
