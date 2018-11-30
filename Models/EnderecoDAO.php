<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:58
 */

namespace Models;



use Core\Model;

class EnderecoDAO extends Model
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

            $sql = "SELECT * FROM enderecos";
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
    public function idExiste(Endereco $endereco)
    {
        try{
            $sql = "SELECT * FROM enderecos WHERE id_fone = :id_fone";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_end', $endereco->getId_end());

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
    public function inserir(Endereco $endereco)
    {
        try{
            $sql = "INSERT INTO enderecos (id_end, id_paciente, tipo, cep, logradouro, numero, compl, bairro, cidade, uf) VALUES (:id_end, :id_paciente, :tipo, :cep, :logradouro, :numero, :compl, :bairro, :cidade, :uf)";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_end', $endereco->getId_end());
            $sql->bindValue(':id_paciente', $endereco->getId_paciente());
            $sql->bindValue(':tipo', $endereco->getTipo());
            $sql->bindValue(':cep', $endereco->getCep());
            $sql->bindValue(':logradoouro', $endereco->getLogradouro());
            $sql->bindValue(':numero', $endereco->getNumero());
            $sql->bindValue(':compl', $endereco->getCompl());
            $sql->bindValue(':bairro', $endereco->getBairro());
            $sql->bindValue(':cidade', $endereco->getCidade());
            $sql->bindValue(':uf', $endereco->getUf());

            if($sql->execute()){
                return "Telefone inserido com sucesso.";
            }else{
                return "Erro na inserção do Telefone";
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }
    public function getEndereco(Endereco $endereco)
    {
        try{
            $dados = array(
                'enderecos' => '',
                'msg' => ''
            );
            $sql = "SELECT * FROM enderecos WHERE id_paciente = :id_paciente";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_paciente', $endereco->getId_paciente());

            $sql->execute();
            if($sql->rowCount() > 0){
                $ret = $sql->fetchAll();

                $dados['enderecos'] = $ret;

                return $dados;
            }else{
                $dados['msg'] = "Enderecos não encontrado";

                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }
    public function update(Endereco $endereco)
    {
        try{
            $dados = array(
                'msg' => ''
            );

            $sql = "UPDATE enderecos SET id_paciente=:id_paciente, tipo=:tipo, cep=:cep, logradouro=:logradouro, numero=:numero, compl=:compl, bairro=:bairro, cidade=:cidade, uf=:uf WHERE id_end = :id_end";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_end', $endereco->getId_end());
            $sql->bindValue(':id_paciente', $endereco->getId_paciente());
            $sql->bindValue(':tipo', $endereco->getTipo());
            $sql->bindValue(':cep', $endereco->getCep());
            $sql->bindValue(':logradoouro', $endereco->getLogradouro());
            $sql->bindValue(':numero', $endereco->getNumero());
            $sql->bindValue(':compl', $endereco->getCompl());
            $sql->bindValue(':bairro', $endereco->getBairro());
            $sql->bindValue(':cidade', $endereco->getCidade());
            $sql->bindValue(':uf', $endereco->getUf());

            if($sql->execute()){

                $dados['msg'] = "Enderecos atualizado com sucesso";
                return $dados;
            }else{

                $dados['msg'] = "Erro na atualização do Enderecos";
                return $dados;
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }





}