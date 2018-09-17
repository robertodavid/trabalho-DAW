<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 15/09/2018
 * Time: 17:26
 */

namespace Models;

use core\Model;

class Usuario extends Model
{
    private $id_user;
    private $nome;
    private $username;
    private $password;
    private $lvlacesso;

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

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

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
}