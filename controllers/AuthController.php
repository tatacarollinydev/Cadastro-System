<?php
//Requer arquivo user que contém model user com aa funções de manipulação de dados dos usuários
require_once 'models/user.php';

class AuthController
{
    // Função responsável processo de login
    public function login ()
    {
        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
            //Obter valores do form
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            //Chama o método do model para encontrar o user por email

            $user = User::findByEmail($email);

            if($user && password_verify($senha, $user['senha'])){
                //Verifica se a senha corresponde a um hash
                session_start();
                //Armazena na sessão o ID do usuário que está logado e seu perfil

                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['perfil'] = $user['perfil'];
                header('');
            }
        }
    }

}
?>