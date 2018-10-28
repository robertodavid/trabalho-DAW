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






}

