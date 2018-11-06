<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:14
 */

namespace Controllers;


use Core\Controller;
use Models\PacienteDAO;

class PacienteController extends Controller
{
    public function index()
    {
        $dados = array(
            'pacientes' => ''
        );

        $this->loadTemplate('paciente', $dados);
    }

    public function listar()
    {
        $dados = array(
            'pacientes' => ''
        );

        $paciD = new PacienteDAO();

        $dados['pacientes'] = $paciD->listar();


        $this->loadTemplate('p_list', $dados);
    }

//    public function addUsuario() {
//        $dados = array(
//            'aviso' => ''
//        );
//
//        $pd = new PacienteDAO();
//        $p = new Paciente();
//
//        if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['dt_nasc']) && !empty($_POST['dt_nasc']) && isset($_POST['cpf']) && !empty($_POST['cpf'])){
//            $nome = addslashes($_POST['nome']);
//            $dt_nasc = addslashes($_POST['dt_nasc']);
//            $nacion = md5(addslashes($_POST['nacion']));
//            $est_civil = addslashes($_POST['est_civil']);
//            $cpf = addslashes($_POST['cpf']);
//            $ci = addslashes($_POST['ci']);
//            $whats = addslashes($_POST['whats']);
//            $id_conv = addslashes($_POST['id_conv']);
//
//
//
//            $p->setNome($nome);
//            $p->setDt_nasc($dt_nasc);
//            $p->setNacion($nacion);
//            $p->setEst_civil($est_civil);
//            $p->setCpf($cpf);
//            $p->setCi($ci);
//            $p->setWhats($whats);
//            $p->setId_conv($id_conv);
//
//
//
//
//            if(!$pd->nomeExiste($p)){
//
//
//                $dados['aviso'] = $ud->inserir($u);
//
//            }else{
//                $dados['aviso'] = "Usuário já consta no sistema";
//            }
//
//
//        }
//
//        $dados['aviso'] ="";
//
//
//        $this->loadTemplate('cadusuario', $dados);
//    }

}
