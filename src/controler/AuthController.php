<?php 


namespace App\controler;

class AuthController {
    public function login(){
        echo 'Login';
    }

}

$loginName = $_GET['loginName'];
$loginSenha = $_GET['loginSenha'];
print_r($loginName);
print_r($loginSenha);

