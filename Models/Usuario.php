<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 15/09/2018
 * Time: 17:26
 */

namespace Models;


use Core\Model;

class Usuario extends Model
{
    private $id_user;
    private $nome;
    private $email;
    private $password;
    private $lvlacesso;
    private $ativo;

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassord()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getLvlAcesso()
    {
        return $this->lvlacesso;
    }

    public function setLvlAcesso($lvlacesso)
    {
        $this->lvlacesso = $lvlacesso;

        return $this;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }
}