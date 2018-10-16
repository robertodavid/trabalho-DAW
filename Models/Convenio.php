<?php
/**
 * Created by PhpStorm.
 * User: rpdavid
 * Date: 15/10/18
 * Time: 14:13
 */

namespace Models;


use Core\Model;

class Convenio extends Model
{
    private $id_conv;
    private $empresa;
    private $ativo;

    public function getId_conv()
    {
        return $this->id_conv;
    }

    public function setId_conv($id_conv)
    {
        $this->id_conv = $id_conv;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }


}