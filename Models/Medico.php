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


}