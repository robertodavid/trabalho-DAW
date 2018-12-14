<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 13:50
 */

namespace Controllers;

use Core\Controller;
use Models\Convenio;
use Models\ConvenioDAO;
use Models\UsuarioDAO;

class ConvenioController extends Controller
{
    public function __construct()
    {
        $uD = new UsuarioDAO();
        $uD->verificarLogin();
    }

    public function index()
    {
        $dados = array(
            'convenios' => ''
        );

        $this->loadTemplate('convenios', $dados);
    }
    public function listar(){
        $dados = array(
            'convenios'=>''
        );
        $convD = new ConvenioDAO();

        $dados['convenios'] = $convD->listar();


        $this->loadTemplate('C_lista', $dados);

    }
    public function add(){
        $dados = array(
            'aviso'=>''
        );
        $c = new Convenio();
        $cd = new ConvenioDAO();

        if (isset($_POST['empresa']) && !empty($_POST['empresa']) && isset($_POST['contato']) && !empty($_POST['contato'])){
           $empresa = addslashes($_POST['empresa']);
           $contato = addslashes($_POST['contato']);

           $c->setEmpresa($empresa);
           $c->setContato($contato);

           if (!$cd->empresaExiste($c)){
               $dados['aviso'] = $cd->inserir($c);
               header("Location: ".BASE_URL."convenio/listar/");
               exit();
           }else{
               $dados['aviso'] = "Convênio já consta no sistema";
               $this->loadTemplate('c_add', $dados);
           }
        }

        $this->loadTemplate('c_add', $dados);

    }

    public function exibir(){
        $dados = array(
            'aviso' => '',
            'convenio' => ''
        );

        $c = new Convenio();
        $cd = new ConvenioDAO();



        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id_conv = addslashes($_GET['id']);
            $c->setId_conv($id_conv);

            if($cd->idExiste($c)){

                $dados['convenio'] = $cd->getConvenio($c);

                $this->loadTemplate('convenio', $dados);
                die();

            }else{
                $dados['aviso'] = "Convênio não consta no sistema";

            }
        }

        $this->loadTemplate('convenio', $dados);

    }

    public function edit() {
        $dados = array(
            'aviso' => '',
            'convenio' =>''
        );

        $c = new Convenio();
        $cd = new ConvenioDAO();

        if(isset($_POST['id_conv']) && !empty($_POST['id_conv']) && isset($_POST['empresa']) && !empty($_POST['empresa'])){

            $id_conv = addslashes($_POST['id_conv']);
            $empresa = addslashes($_POST['empresa']);
            $ativo = addslashes($_POST['ativo']);
            $contato = addslashes($_POST['contato']);

            $c->setId_conv($id_conv);
            $c->setContato($contato);
            $c->setEmpresa($empresa);
            $c->setAtivo($ativo);

            if(!$cd->idExiste($c)){

                $dados['aviso'] = "Convênio Inválido!";

            }else{
                $dados['aviso'] = $cd->update($c);
                header("Location: ".BASE_URL."convenio/listar/");
                die();
            }

        }

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id_conv = addslashes($_GET['id']);
            $c->setId_conv($id_conv);

            if($cd->idExiste($c)){
                $dados['convenio'] = $cd->getConvenio($c);
                $this->loadTemplate('editConvenio', $dados);

            }else{
                $dados['aviso']= "Convênio não encontrado";
            }
        }

        $dados['aviso'] ="";


        $this->loadTemplate('convenio', $dados);
    }


}