<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 14:32
 */

namespace Models;

use Core\Model;

class Medico extends Model
{
    private $id_medic;
    private $nome;
    private $dt_nasc;
    private $cro;
    private $whats;

    public function getId_medic()
    {
        return $this->id_medic;
    }

    public function setId_medic($id_medic)
    {
        $this->id_medic = $id_medic;
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

    public function setDt_nasc($dt_nasc)
    {
        $this->dt_nasc = $dt_nasc;
    }

    public function getCro()
    {
        return $this->cro;
    }

    public function setCro($cro)
    {
        $this->cro = $cro;
    }

    public function getWhats()
    {
        return $this->whats;
    }

    public function setWhats($whats)
    {
        $this->whats = $whats;
    }


}