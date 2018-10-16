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






}