<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:00
 */
namespace Models;

use Core\Model;

class Paciente extends Model
{
    private $id_paciente;
    private $nome;
    private $dt_nasc;
    private $nacion;
    private $est_civil;
    private $cpf;
    private $ci;
    private $whats;
    private $id_conv;

    public function getId_paciente()
    {
        return $this->id_paciente;
    }

    public function setId_medic($id_paciente)
    {
        $this->id_paciente = $id_paciente;
    }

    public function getName()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDt_nasc()
    {
        return $this->dt_nasc;
    }

    public function setDt_nasc($da_nasc)
    {
        $this->dt_nasc = $da_nasc;
    }

    public function getNacion()
    {
        return $this->nacion;
    }

    public function setNacion($nacion)
    {
        $this->nacion = $nacion;
    }

    public function getEst_civil()
    {
        return $this->est_civil;
    }

    public function setEst_civil($est_civil)
    {
        $this->est_civil = $est_civil;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCi()
    {
        return $this->ci;
    }

    public function setCi($ci)
    {
        $this->ci = $ci;
    }

    public function getWhats()
    {
        return $this->whats;
    }

    public function setWhats($whats)
    {
        $this->whats = $whats;
    }

    public function getIdConv()
    {
        return $this->id_conv;
    }

    public function setId_conv($id_conv)
    {
        $this->id_conv = $id_conv;
    }




}