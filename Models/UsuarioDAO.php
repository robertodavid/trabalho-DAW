<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 15/09/2018
 * Time: 17:18
 */

namespace Models;




use Core\Model;

class UsuarioDAO extends Model
{
    public function __construct()
    {
        try{
            parent::__construct();
        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function usernameExiste(Usuario $usuario)
    {
        try{
            $sql = "SELECT * FROM usuarios WHERE username = :username";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':username', $usuario->getUsername());

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

    public function idExiste(Usuario $usuario)
    {
        try{
            $sql = "SELECT * FROM usuarios WHERE id_user = :id_user";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_user', $usuario->getIdUser());

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
                return "Usuário inserido com sucesso.";
            }else{
                return "Erro na inserção do usuário";
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function listar()
    {
        try{

            $sql = "SELECT * FROM usuarios";
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

    public function getUsuario(Usuario $usuario)
    {
        try{
            $dados = array(
                'usuario' => ''
            );
            $sql = "SELECT * FROM usuarios WHERE id_user = :id_user";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_user', $usuario->getIdUser());

            $sql->execute();
            if($sql->rowCount() > 0){
                $ret = $sql->fetch();

                $dados['usuario'] = $ret;

                return $dados;
            }else{
                echo("Erro na consulta");
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function update(Usuario $usuario)
    {
        try{
            $sql = "UPDATE usuarios SET nome=:nome, username=:username, lvlacesso=:lvlacesso
                    WHERE id_user = :id_user";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_user', $usuario->getIdUser());
            $sql->bindValue(':nome', $usuario->getNome());
            $sql->bindValue(':username', $usuario->getUsername());
            $sql->bindValue(':lvlacesso', $usuario->getLvlAcesso());


            if($sql->execute()){


                return "Usuário Atualizado com sucesso";
            }else{
                return "Erro na Atualização do usuário";
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

    public function updateSenha(Usuario $usuario)
    {
        try{
            $sql = "UPDATE usuarios SET password = :password
                    WHERE id_user = :id_user";
            $sql = $this->pdo->prepare($sql);

            $sql->bindValue(':id_user', $usuario->getIdUser());
            $sql->bindValue(':password', $usuario->getPassord());

            if($sql->execute()){


                return "Senha Atualizado com sucesso";
            }else{
                return "Erro na Atualização da Senha";
            }

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }

}
