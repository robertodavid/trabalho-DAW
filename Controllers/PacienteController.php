<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:14
 */

namespace Controllers;


use Core\Controller;
use Models\Convenio;
use Models\ConvenioDAO;
use Models\Endereco;
use Models\EnderecoDAO;
use Models\Paciente;
use Models\PacienteDAO;
use Models\Telefone;
use Models\TelefoneDAO;
use Models\UsuarioDAO;

class PacienteController extends Controller
{
    public function __construct()
    {
        $uD = new UsuarioDAO();
        $uD->verificarLogin();
    }

    public function index()
    {
        $dados = array(
            'pacientes' => ''
        );

        $this->loadTemplate('pacientes', $dados);
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

    public function add() {
        $dados = array(
            'aviso' => '',
            'paciente' => '',
            'convenios' => ''
        );

        $pd = new PacienteDAO();
        $p = new Paciente();
        $cd = new ConvenioDAO();

        if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['dt_nasc']) && !empty($_POST['dt_nasc']) && isset($_POST['cpf']) && !empty($_POST['cpf'])){
            $nome = addslashes($_POST['nome']);
            $dt_nasc = addslashes($_POST['dt_nasc']);
            $nacion = addslashes($_POST['nacion']);
            $est_civil = addslashes($_POST['est_civil']);
            $cpf = addslashes($_POST['cpf']);
            $ci = addslashes($_POST['ci']);
            $whats = addslashes($_POST['whats']);
            $id_conv = addslashes($_POST['id_conv']);



            $p->setNome($nome);
            $p->setDt_nasc($dt_nasc);
            $p->setNacion($nacion);
            $p->setEst_civil($est_civil);
            $p->setCpf($cpf);
            $p->setCi($ci);
            $p->setWhats($whats);
            $p->setId_conv($id_conv);




            if(!$pd->nomeExiste($p)){


                $dados['aviso'] = $pd->inserir($p);
                header("Location: ".BASE_URL."paciente/listar/");
                exit();


            }else{
                $dados['aviso'] = "Paciente já consta no sistema";
            }
        }

        $dados['convenios'] = $cd->listar();


        $this->loadTemplate('cadPaciente', $dados);
    }

    public function exibir(){
        $dados = array(
            'aviso' => '',
            'paciente' => '',
            'convenios' => ''
        );

        $pd = new PacienteDAO();
        $p = new Paciente();
        $cd = new ConvenioDAO();



        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id_paciente = addslashes($_GET['id']);
            $p->setId_paciente($id_paciente);

            if($pd->idExiste($p)){

                $dados['paciente'] = $pd->getPaciente($p);
                $dados['convenios'] = $cd->listar();

                $this->loadTemplate('paciente', $dados);
                die();

            }else{
                $dados['aviso'] = "Paciente já consta no sistema";

            }
        }

        $this->loadTemplate('paciente', $dados);

    }

    public function editPaciente() {
        $dados = array(
            'aviso' => '',
            'paciente' =>'',
            'convenios' => ''
        );

        $pd = new PacienteDAO();
        $p = new Paciente();
        $cd = new ConvenioDAO();

        if(isset($_POST['id_paciente']) && !empty($_POST['id_paciente']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['dt_nasc']) && !empty($_POST['dt_nasc']) && isset($_POST['cpf']) && !empty($_POST['cpf'])){
            $id_paciente = addslashes($_POST['id_paciente']);
            $nome = addslashes($_POST['nome']);
            $dt_nasc = addslashes($_POST['dt_nasc']);
            $nacion = addslashes($_POST['nacion']);
            $est_civil = addslashes($_POST['est_civil']);
            $cpf = addslashes($_POST['cpf']);
            $ci = addslashes($_POST['ci']);
            $whats = addslashes($_POST['whats']);
            $id_conv = addslashes($_POST['id_conv']);


            $p->setId_paciente($id_paciente);
            $p->setNome($nome);
            $p->setDt_nasc($dt_nasc);
            $p->setNacion($nacion);
            $p->setEst_civil($est_civil);
            $p->setCpf($cpf);
            $p->setCi($ci);
            $p->setWhats($whats);
            $p->setId_conv($id_conv);


            if(!$pd->idExiste($p)){

                $dados['aviso'] = "Paciente Inválido!";

            }else{
                $dados['aviso'] = $pd->update($p);
            }

        }

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id_paciente = addslashes($_GET['id']);
            $p->setId_paciente($id_paciente);

            if($pd->idExiste($p)){
                $dados['paciente'] = $pd->getPaciente($p);
                $dados['convenios'] = $cd->listar();
                $this->loadTemplate('editPaciente', $dados);

            }else{
                $dados['aviso']= "Paciente não encontrado";
            }
        }

        $dados['aviso'] ="";

        $this->loadTemplate('paciente', $dados);
    }

    public function get(){
        $dados = array(
            'pacientes' => ''
        );
        $paci = new Paciente();
        $paciD = new PacienteDAO();

        if(isset($_POST['busca']) && !empty($_POST['busca'])){
            $busca = addslashes($_POST['busca']);
            $paci->setNome($busca);
            $dados['pacientes'] = $paciD->buscar($paci);

            $this->loadTemplate('busca', $dados);
        }
    }

    public function dados2(){
        $dados = array(
            'aviso' => '',
            'paciente' => ''
        );

        $p = new Paciente();
        $pd = new PacienteDAO();

        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id_paciente = addslashes($_GET['id']);
            $p->setId_paciente($id_paciente);

            if($pd->idExiste($p)){
                $dados['paciente'] = $pd->buscar($p);
                $this->loadTemplate('dados', $dados);

            }else{
                $dados['aviso']= "Paciente não encontrado";
            }
        }
    }

    public function dados(){
    $dados = array(
        'aviso' => '',
        'paciente' => '',
        'telefones' => '',
        'enderecos' => ''
    );

    $p = new Paciente();
    $pd = new PacienteDAO();
    $t = new Telefone();
    $td = new TelefoneDAO();
    $e = new Endereco();
    $ed = new EnderecoDAO();

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id_paciente = addslashes($_GET['id']);
        $p->setId_paciente($id_paciente);
        $t->setId_paciente($id_paciente);
        $e->setId_paciente($id_paciente);

        if($pd->idExiste($p)){
            $dados['paciente'] = $pd->buscar($p);
            $dados['telefones'] = $td->getTelefone($t);
            $dados['enderecos'] = $ed->getEndereco($e);
            $this->loadTemplate('exibirDados', $dados);

        }else{
            $dados['aviso']= "Paciente não encontrado";
        }
    }


    }

}
