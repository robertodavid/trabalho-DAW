<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:13
 */

namespace Models;



use Core\Model;

class PacienteDAO extends Model
{
    public function __construct()
    {
        try{
            parent:: __construct();
        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function contar()
    {
        try{

            $sql = "SELECT COUNT(*) AS nPaci FROM pacientes ";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $dados = $sql->fetch();
                return $dados;
            }else{
                echo("Erro na consulta");
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function listar()
    {
        try{

            $sql = "SELECT * FROM pacientes";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $dados = $sql->fetchAll();
                return $dados;
            }else{
                echo("Erro na consulta");
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function idExiste(Paciente $paciente)
    {
        try{
            $sql = "SELECT * FROM pacientes WHERE id_paciente = :id_paciente";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $paciente->getId_paciente());

            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function nomeExiste(Paciente $paciente)
    {
        try{
            $sql = "SELECT * FROM pacientes WHERE nome = :nome";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $paciente->getNome());

            $sql->execute();

            if($sql->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function inserir(Paciente $paciente)
    {
        try{
            $sql = "INSERT INTO paciente (nome, dt_nasc, nacion, est_civil, cpf, ci, whats, id_conv)
                                  VALUES (:nome, :dt_nasc, :nacion, :est_civil, :cpf, :ci, :whats, :id_conv)";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':nome', $paciente->getNome());
            $sql->bindValue(':dt_nasc', $paciente->getDt_nasc());
            $sql->bindValue(':nacion', $paciente->getNacion());
            $sql->bindValue(':est_civil', $paciente->getEst_civil());
            $sql->bindValue(':cpf', $paciente->getCpf());
            $sql->bindValue(':ci', $paciente->getCi());
            $sql->bindValue(':whats', $paciente->getWhats());
            $sql->bindValue(':id_conv', $paciente->getId_conv());

            if($sql->execute()){
                return "Paciente inserido com sucesso.";
            }else{
                return "Erro na inserção do usuário";
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function getPaciente(Paciente $paciente)
    {
        try{
            $dados = array(
                'paciente' => ''
            );
            $sql = "SELECT * FROM pacientes WHERE id_paciente = :id_paciente";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $paciente->getId_paciente());

            $sql->execute();
            if($sql->rowCount() > 0){
                $ret = $sql->fetch();

                $dados['paciente'] = $ret;

                return $dados;
            }else{
              return false;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function update(Paciente $paciente)
    {
        try{
          $dados = array(
              'msg' => ''
          );

            $sql = "UPDATE pacientes SET nome = :nome, dt_nasc = :dt_nasc, nacion = :nacion, est_civil = est_civil, cpf = :cpf, ci = :ci, whats = :whats, id_conv = :id_conv
                    WHERE id_paciente = :id_paciente";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':nome', $paciente->getNome());
            $sql->bindValue(':dt_nasc', $paciente->getDt_nasc());
            $sql->bindValue(':nacion', $paciente->getNacion());
            $sql->bindValue(':est_civil', $paciente->getEst_civil());
            $sql->bindValue(':cpf', $paciente->getCpf());
            $sql->bindValue(':ci', $paciente->getCi());
            $sql->bindValue(':whats', $paciente->getWhats());
            $sql->bindValue(':id_conv', $paciente->getId_conv());
            $sql->bindValue(':id_paciente', $paciente->getId_paciente());


            if($sql->execute()){

                $dados['msg'] = "Usuário Atualizado com sucesso";
                return $dados;
            }else{

                $dados['msg'] = "Erro na Atualização do usuário";
                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }





}
