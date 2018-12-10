<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:26
 */

namespace Models;



use Core\Model;

class TelefoneDAO extends Model
{
    public function __construct()
    {
        try {
            parent:: __construct();
        } catch (\PDOException $e) {
            print $e->getMessage();
        }
    }

    public function listar()
    {
        try {

            $sql = "SELECT * FROM telefones";
            $sql = $this->pdo->query($sql);

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetchAll();
                return $dados;
            } else {
                echo("Erro na consulta");
            }

        } catch (\PDOException $e) {
            print $e->getMessage();
        }
    }
    public function idExiste(Telefone $telefone)
    {
        try{
            $sql = "SELECT * FROM telefones WHERE id_fone = :id_fone";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_fone', $telefone->getId_fone());

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
    public function telefoneExiste(Telefone $nTelefone)
    {
        try{
            $sql = "SELECT * FROM telefones WHERE telefone = :nTelefone";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':nTelefone', $nTelefone->getTelefone());

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
    public function inserir(Telefone $telefone)
    {
        try{
            $sql = "INSERT INTO telefones (id_paciente, telefone, obs) VALUES (:id_paciente, :telefone, obs)";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $telefone->getId_paciente());
            $sql->bindValue(':telefopne', $telefone->getTelefone());
            $sql->bindValue(':obs', $telefone->getObs());

            if($sql->execute()){
                return "Telefone inserido com sucesso.";
            }else{
                return "Erro na inserção do Telefone";
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }
    public function getTelefone(Telefone $telefone)
    {
        try{
            $dados = array(
                'telefones' => '',
                'msg' => ''
            );
            $sql = "SELECT * FROM telefones WHERE id_paciente = :id_paciente";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $telefone->getId_paciente());

            $sql->execute();
            if($sql->rowCount() > 0){
                $ret = $sql->fetchAll();

                $dados['telefones'] = $ret;

                return $dados;
            }else{
                $dados['msg'] = "Telefones não encontrado";

                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }
    public function update(Telefone $telefone)
    {
        try{
            $dados = array(
                'msg' => ''
            );

            $sql = "UPDATE telefones SET id_paciente = :id_paciente, telefone = :telefone, obs = :obs WHERE id_fone = :id_fone";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $telefone->getId_paciente());
            $sql->bindValue(':telefone', $telefone->getTelefone());
            $sql->bindValue(':obs', $telefone->getObs());
            $sql->bindValue(':id_fone', $telefone->getId_fone());


            if($sql->execute()){

                $dados['msg'] = "Telefone atualizado com sucesso";
                return $dados;
            }else{

                $dados['msg'] = "Erro na atualização do telefone";
                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }
    public function delete(Telefone $telefone)
    {
        try{
            $dados = array(
                'msg' => ''
            );

            $sql = "DELETE FROM telefones WHERE id_fone = :id_fone";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_fone', $telefone->getId_fone());


            if($sql->execute()){

                return $dados;
            }else{

                $dados['msg'] = "Erro ao excluir o telefone";
                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }

    }
    public function add(Telefone $telefone)
    {
        try{
            $dados = array(
                'msg' => ''
            );

            $sql = "INSERT INTO telefones (id_paciente, telefone, obs) VALUES (:id_paciente, :telefone, :obs) ";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $telefone->getId_paciente());
            $sql->bindValue(':telefone', $telefone->getTelefone());
            $sql->bindValue(':obs', $telefone->getObs());


            if($sql->execute()){

                $dados['msg'] = "Telefone inserido com sucesso";
                return $dados;
            }else{

                $dados['msg'] = "Erro ao inserir telefone";
                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }






}