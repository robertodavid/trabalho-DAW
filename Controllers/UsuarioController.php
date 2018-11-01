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

        $ud = new UsuarioDAO();

        $dados['usuarios'] = $ud->listar();


        $this->loadTemplate('usuario', $dados);
    }

    public function addUsuario() {
        $dados = array(
            'aviso' => ''
        );

        $ud = new UsuarioDAO();
        $u = new Usuario();

        if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
            $nome = addslashes($_POST['nome']);
            $username = addslashes($_POST['username']);
            $password = md5(addslashes($_POST['password']));
            $lvlacesso = addslashes($_POST['lvlacesso']);

            $u->setNome($nome);
            $u->setUsername($username);
            $u->setPassword($password);
            $u->setLvlAcesso($lvlacesso);


            if(!$ud->usernameExiste($u)){


                $dados['aviso'] = $ud->inserir($u);

            }else{
                $dados['aviso'] = "Usuário já consta no sistema";
            }


        }

        $dados['aviso'] ="";


        $this->loadTemplate('cadusuario', $dados);
    }

    public function editUsuario($id) {
        $dados = array(
            'aviso' => '',
            'usuario' =>''
        );

        $ud = new UsuarioDAO();
        $u = new Usuario();

        if(isset($_POST['id_user']) && !empty($_POST['id_user']) && isset($_POST['nome']) && !empty($_POST['nome'])
            && isset($_POST['username']) && !empty($_POST['username'])){
            $id_user = addslashes($_POST['id_user']);
            $nome = addslashes($_POST['nome']);
            $username = addslashes($_POST['username']);
            $levelacesso = addslashes($_POST['lvlacesso']);

            $u->setIdUser($id_user);
            $u->setNome($nome);
            $u->setUsername($username);
            $u->setLvlAcesso($levelacesso);

            $ret = $ud->update($u);

            if(isset($_POST['password']) && !empty($_POST['password'])){
                $password = md5(addslashes($_POST['password']));
                $u->setPassword($password);
                $ret = $ud->updateSenha($u);
            }

            $u->setIdUser($id_user);
            $u->setNome($nome);
            $u->setUsername($username);
            $u->setLvlAcesso($levelacesso);

            $ret = $ud->update($u);
        }

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id_user = addslashes($_GET['id']);


            $u->setIdUser($id_user);

            if($ud->idExiste($u)){

                $dados['usuario'] = $ud->getUsuario($u);


            }else{
                $dados['aviso'] = "Usuário já consta no sistema";
            }


        }

        $dados['aviso'] ="";


        $this->loadTemplate('editusuario', $dados);
    }



}
