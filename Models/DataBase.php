<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 15/09/2018
 * Time: 17:18
 */

namespace Models;

class DataBase
{
    private $host='127.0.0.1';
    private $usuario='root';
    private $senha='';
    private $dbnome='odonto';

    public function __construct()
    {
       try{

           $this->pdo = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbnome, $this->usuario, $this->senha);
           $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

       }catch (\PDOException $e){
            print $e->getMessage();
       }
    }
}
