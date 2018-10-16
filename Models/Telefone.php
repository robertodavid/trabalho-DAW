<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 15:20
 */

namespace Models;

use Core\Model;

class Telefone extends Model
{
    private $id_fone;
    private $id_paciente;
    private $telefone;
    private $obs;


    public function getId_fone()
    {
        return $this->id_fone;
    }

    public function setId_fone($id_fone)
    {
        $this->id_fone = $id_fone;
    }


    public function getId_paciente()
    {
        return $this->id_paciente;
    }

    public function setId_paciente($id_paciente)
    {
        $this->id_paciente = $id_paciente;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getObs()
    {
        return $this->obs;
    }

    public function setObs($obs)
    {
        $this->obs = $obs;
    }




}