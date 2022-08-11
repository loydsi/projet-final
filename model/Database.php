<?php
namespace Models

abstract class Database
{
    /*private $dbConnect;

    private function setDb()
    {

    }*/
    /**
     * Retourne une connexion a la base de donnees
     * 
     * @return PDO
     */

    private function getDb():PDO
    {
        $pdo = new PDO('mysql:host=localhost:8889
        ;dbname=projet_final;charset=utf8', 'root', 'root', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ])
        return $pdo;
    }

    public function addUser($email, $pwd)
    {
        $data = [
            'email' => $email,
            'pwd' => $pwd
        ];
	    $query = $this->getDb()->prepare( "INSERT INTO users SET mail=:email, password=:pwd", role = 2, created_at = NOW(), modified_at = NOW() );
		$query->execute( [$email,$pwd] );

    }
}