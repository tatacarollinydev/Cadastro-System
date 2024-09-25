<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controller/AuthController.php';//Incluir controlador de autenticação
require 'controller/UserController.php';//Inclui controlador de usuários
require 'controller/DashboardController.php';//Inclui o controlador de Dashboard

//Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); // Instancia controlador de autenticação
$userController = new UserController();// Instancia controlador de usuário
$dashboardController = new DashboardController(); // Instancia controlador dashboard 

//Coleta a ação de URL, se não houver ação defina, usa 'login' como padrão
$action = $_GET['action'] ?? 'login';//Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

switch($action){
    case 'login':
        $authController->Login(); //Chama o método de login do controlador de autenticação
}
?>
