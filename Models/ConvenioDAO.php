<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 13:57
 */

namespace Models;



use Core\Model;

class ConvenioDAO extends Model
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

            $sql = "SELECT COUNT(*) AS nConv FROM convenios ";
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

            $sql = "SELECT * FROM convenios";
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

    public function idExiste(Convenio $convenio)
    {
        try{
            $sql = "SELECT * FROM convenios WHERE id_conv = :id_conv";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_conv', $convenio->getId_conv());

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

    public function empresaExiste(Convenio $convenio)
    {
        try{
            $sql = "SELECT * FROM convenios WHERE empresa = :empresa";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':empresa', $convenio->getEmpresa());

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

    public function inserir(Convenio $convenio)
    {
        try{
            $sql = "INSERT INTO convenios (empresa, contato) VALUES (:empresa, :contato)";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':empresa', $convenio->getEmpresa());
            $sql->bindValue(':contato', $convenio->getContato());

            if($sql->execute()){
                return "Convenio inserido com sucesso.";
            }else{
                return "Erro na inserção do Convenio";
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function getConvenio(Convenio $convenio)
    {
        try{
            $dados = array(
                'convenio' => '',
                'msg' => ''
            );
            $sql = "SELECT * FROM convenios WHERE id_conv = :id_conv";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_conv', $convenio->getId_conv());

            $sql->execute();
            if($sql->rowCount() > 0){
                $ret = $sql->fetch();

                $dados['convenio'] = $ret;

                return $dados;
            }else{
                $dados['msg'] = "Convenio não encontrado";

                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function update(Convenio $convenio)
    {
        try{
            $dados = array(
                'msg' => ''
            );

            $sql = "UPDATE convenios SET empresa = :empresa, ativo = :ativo, contato = :contato WHERE id_conv = :id_conv";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':empresa', $convenio->getEmpresa());
            $sql->bindValue(':ativo', $convenio->getAtivo());
            $sql->bindValue(':contato', $convenio->getContato());
            $sql->bindValue(':id_conv', $convenio->getId_conv());

            if($sql->execute()){

                $dados['msg'] = "Convenio Atualizado com sucesso";
                return $dados;
            }else{

                $dados['msg'] = "Erro na Atualização do Convenio";
                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }




}

