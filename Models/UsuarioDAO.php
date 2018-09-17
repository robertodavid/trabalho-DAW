<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 15/09/2018
 * Time: 17:18
 */

namespace Models;


class UsuarioDAO extends DataBase
{
    public function __construct()
    {
        try{
            parent::__construct();
        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function inserir(Usuario $usuario)
    {
        try{
            $sql = "INSERT INTO usuarios (nome, username, password, lvlacesso) 
                                  VALUES (:nome, :username, :password, :lvlacesso)";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':nome', $usuario->getNome());
            $sql->bindValue(':username', $usuario->getUsername());
            $sql->bindValue(':password', $usuario->getPassord());
            $sql->bindValue(':lvlacesso', $usuario->getLvlAcesso());

            if($sql->execute()){
                echo("Usuário inserido com sucesso.");
            }else{
                echo("Erro na inserção do usuário");
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function consulta()
    {


        try{
            $array = array();
            $sql = "SELECT * FROM usuarios";
            $sql = $this->pdo->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
                return $array;
            }else{
                echo("Erro na consulta");
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

}