<?php
namespace Core;

class Model
{
    private $host='127.0.0.1';
    private $usuario='root';
    private $senha='';
    private $dbnome='odonto';

    public function __construct()
    {
        try{

            $this->pdo = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbnome, $this->usuario, $this->senha);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        }catch (\PDOException $e){
            print $e->getMessage();
        }
    }
}
