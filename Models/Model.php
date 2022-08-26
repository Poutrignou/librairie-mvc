<?php

use LDAP\Result;

class  Model {
// ATTRIBUT privé contenant l'objet PDO, variable vide dans lequel on va instancier l'objet pdo (L13)
    private $db; 
    //Attribut qui contiendra l'unique instance du modèle
    private static $instance = null;

    //Constructeur de l'objet PDO et l'affectant à $db
    private function __construct() {
        $DB_DSN = 'mysql:host=localhost;dbname=etude_de_cas';
        $DB_USER = 'root';
        $DB_PASS = "";
        $this->db = new PDO($DB_DSN,$DB_USER,$DB_PASS );
        $this->db->query('SET NAMES utf8');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    //Méthode pour récupérer l'instance de la classe Model
    public static function get_Model() {
        //tester si la classe est instanciée 
        if (is_null(self::$instance)){
            // si $intance est null on l'instancie
            self::$instance = new Model();
        } 
        //autrementsi $instance est déja instanciée on renvoie l'instance
        return self::$instance;
    }

    public function get_user_from_email ($mail)  //kn,,dkjkfdnkfnsnfjksdnjfnj
    
    {
        $result = $this->db->prepare("SELECT * FROM user WHERE email = ? ");
        $result->bindValue(1, $mail,PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }

    public function new_user ($email, $password, $rank) 
    
    {

        $r = $this->db->prepare("INSERT INTO user(email, password, rank) VALUES(:mail, :password, :rank)");
        $r->bindValue(':mail', $email, PDO::PARAM_STR);
        $r->bindValue(':password', $password, PDO::PARAM_STR);
        $r->bindValue(':rank', $rank, PDO::PARAM_STR);
        $r->execute();
        return $this->get_user_from_email($email);
    } 

}
