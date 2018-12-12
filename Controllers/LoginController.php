<?php
/**
 * Created by PhpStorm.
 * User: RPDavid
 * Date: 11/12/2018
 * Time: 19:08
 */
namespace Controllers;

use Core\Controller;

class LoginController extends Controller {
    public function __construct()
    {
    }

    public function index(){
        $dados = array();

        $this->loadView('login', $dados);
    }
}