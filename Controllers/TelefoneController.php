<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:27
 */

namespace Controllers;


use Core\Controller;
use Models\Telefone;
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
    public function add()
    {
        $dados = array(
            'msg' => ''
        );

        $t = new Telefone();
        $tD = new TelefoneDAO();

        if(isset$_POST['id_paciente'] && !empty($_POST['id_paciente']) && isset$_POST['telefone'] && !empty($_POST['telefone']) && isset$_POST['obs'] && !empty($_POST['obs'])){
            $id_paciente = addslashes($_POST['id_paciente']);
            $telefone = addslashes($_POST['telefone']);
            $obs = addslashes($_POST['obs']);

            $t->setId_paciente($id_paciente);
            $t->setTelefone($telefone);
            $t->setObs($obs);

            $dados['msg']=$tD->;
        }

        $dados['telefones'] = $teleD->listar();


        $this->loadTemplate('telefone', $dados);
    }

}