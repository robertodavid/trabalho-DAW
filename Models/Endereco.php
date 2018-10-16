<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:47
 */

namespace Models;

use Core\Model;

class Endereco extends Model
{
    private $id_end ;
    private $id_paciente;
    private $tipo;
    private $cep;
    private $logradouro;
    private $numero;
    private $compl;
    private $bairro;
    private $cidade;
    private $uf;


    public function getId_end()
    {
        return $this->id_end;
    }

    public function setId_end($id_end)
    {
        $this->id_end = $id_end;
    }


    public function getId_paciente()
    {
        return $this->id_paciente;
    }

    public function setId_paciente($id_paciente)
    {
        $this->id_paciente = $id_paciente;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getCompl()
    {
        return $this->compl;
    }

    public function setCompl($compl)
    {
        $this->compl = $compl;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
    }



}