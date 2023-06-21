<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
include_once($path.'/Models/Usuario.php');

    class UsuarioController{
        public function login($objUsuario){
            echo $objUsuario->getEmail();

            if($objUsuario->getEmail() == null strlen($objUsuario->getEmail()) > 100){
                return "Email inválido";
            }

            if($objUsuario->getSenha() == null || strlen($objUsuario->getSenha()) > 100){
                return "Senha inválida";
            }
        }
    }
 ?>