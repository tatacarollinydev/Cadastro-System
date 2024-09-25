<?php
require_once 'models/database.php';

class User{
    //Função para encontrar user no banco de dados pelo e-mail
    public static function findByEmail($email){

        //Obter conexão com banco de dados
        $conn = Database:: getConnection();
        //Prepara consulta SQL par buscar o user por email
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");

        $stmt->execute(['email' => $email]);

        //Retorno de dados do user encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Cria função que localiza usuário pelo ID
    public static function find($id){

        //Obtem a conexão com o banco de dados
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
    
        $stmt->executa(['id => $id']);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
        //Função para criar usuário na base de dados
        public static function create(){
            $conn = Database::getConnection();


            $stmt = $conn->prepare("INSERT INTO usuarios(nome, email, senha, perfil)
            VALUES (nome, :email, :senha, :perfil)");

            
        }

    

}

?>