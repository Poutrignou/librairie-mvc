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

    // *********************************** Fonction de selection des livres ************************************

    public function get_all_livre() {
        $result = $this->db->prepare("SELECT * FROM livre");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }
    // *********************************** Fonction d'affichage des Fournisseurs ************************************
    public function get_all_fournisseur() {
        $result = $this->db->prepare("SELECT * FROM fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    // *********************************** Fonction de selection des commandes ************************************

    public function get_all_commande() {
        $result = $this->db->prepare(" SELECT ISBN, Titre_livre, Raison_sociale, Editeur, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C   
        INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

        // *********************************** Fonction de selection des Titres ***************************************

    public function get_all_titre() {
        $result = $this->db->prepare("SELECT DISTINCT Id_livre, Titre_livre FROM livre");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    public function get_one_livre_titre() {
        $var = $_POST['titreLivre'];
        $result = $this->db->prepare("SELECT * FROM livre WHERE Titre_livre = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    // *********************************** Fonction de selection des Auteurs *******************************************

    public function get_all_auteur() {
        $result = $this->db->prepare("SELECT Nom_auteur, Prenom_auteur FROM livre");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    //  fonction du select 
    public function get_par_auteur() {
        $result = $this->db->prepare("SELECT Nom_auteur, Prenom_auteur FROM livre");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }
    //  fonction pour l affichage
    public function get_livre_one_par_auteur() {
        $var = $_POST['auteurLivre'];
        $result = $this->db->prepare("SELECT * FROM livre WHERE Nom_auteur = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

        // *********************************** Fonction de selection des Editeurs ********************************************

    public function get_all_editeur() {
        $result = $this->db->prepare("SELECT Editeur FROM livre");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    public function get_livre_one_editeur() {
        $var = $_POST['editeurLivre'];
        $result = $this->db->prepare("SELECT * FROM livre WHERE Editeur = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    // *********************************** Fonction de selection des fournisseur par raison sociale ****************************

    public function get_all_rsociale() {
        $result = $this->db->prepare("SELECT Id_fournisseur, Raison_sociale FROM fournisseur");

        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    public function get_one_rsociale() {
        $var = $_POST['raisonSocialeFournisseur'];
        $result = $this->db->prepare("SELECT * FROM fournisseur WHERE Raison_sociale = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    // ********************************* Fonction de selection des fournisseur par Localité *************************************


    public function get_all_localite() {
        $result = $this->db->prepare("SELECT DISTINCT Localite FROM fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    public function get_one_localite() {
        $var = $_POST['localiteFournisseur'];
        $result = $this->db->prepare("SELECT * FROM fournisseur WHERE Localite = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

        // ********************************* Fonction de selection des fournisseur par Pays *************************************

    public function get_all_pays() {
        $result = $this->db->prepare("SELECT DISTINCT Pays FROM fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    public function get_one_pays() {
        $var = $_POST['paysFournisseur'];
        $result = $this->db->prepare("SELECT * FROM fournisseur WHERE Pays = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

        // ********************************* Fonction de selection des commandes par editeur *************************************

    public function get_all_cediteur() {
        $result = $this->db->prepare(" SELECT Id_commande, Titre_livre, Raison_sociale, Editeur, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C   
        INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    } 

        public function get_one_cediteur() {
            $var = $_POST['cediteur'];
            $result = $this->db->prepare(" SELECT Id_commande, Titre_livre, Raison_sociale, Editeur, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C   
            INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur WHERE Editeur = ?");
            $result->bindparam(1, $var);
            $result->execute();
            return $result->fetchALL(PDO::FETCH_OBJ);    

    }  
        // ********************************* Fonction de selection des commandes par editeur *************************************

    public function get_all_cfournisseur() {
        $result = $this->db->prepare(" SELECT Id_commande, Titre_livre, Raison_sociale, Editeur, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C   
        INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }   

    public function get_one_cfournisseur() {
        $var = $_POST['cfournisseur'];
        $result = $this->db->prepare(" SELECT Id_commande, Titre_livre, Raison_sociale, Editeur, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C   
        INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur WHERE Raison_sociale = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);  
    }   

        // ********************************* Fonction de selection des commandes par date *************************************
    public function get_all_cdate() {
        $result = $this->db->prepare(" SELECT Id_commande, Titre_livre, Raison_sociale, Editeur, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C   
        INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }   

    public function get_one_cdate() {
        $var = $_POST['cdate'];
        $result = $this->db->prepare(" SELECT Id_commande, Titre_livre, Raison_sociale, Editeur, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C   
        INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur WHERE Date_achat = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);  
    } 

        // *************************************** AJOUTER NOUVEAUX LIVRES *******************************************

    public function get_ajouter_livre($tableau) {

        $result = $this->db->prepare("INSERT INTO livre (ISBN,Titre_livre,Theme_livre,Nbr_pages_livre,Format_livre,Nom_auteur,Prenom_auteur,Editeur,Annee_edition,Prix_vente,Langue_livre)
        VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        
        $result->execute($tableau);
    } 
    /***********************************************EFFACER LIVRES ************************************************************/

    public function get_effacer_livre() {
        $var = $_GET['isbn'];
        $result = $this->db->prepare("DELETE FROM livre WHERE ISBN = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }

    /***********************************************MODIFIER LIVRES ************************************************************/

    public function get_selection_modifier_livre() {
        $var = $_GET['isbn'];
        $result = $this->db->prepare("SELECT * FROM livre WHERE ISBN = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
        }

    public function get_modifier_livre($tableau) {

        $result = $this->db->prepare("UPDATE livre SET  ISBN = ? ,Titre_livre = ?,Theme_livre =?,Nbr_pages_livre =?,Format_livre=?,Nom_auteur=?,Prenom_auteur=?,Editeur=?,Annee_edition=?,Prix_vente=?,Langue_livre=? where ISBN=?");
        $result->execute($tableau);
    } 
            /********************************************** AJOUTER COMMANDES **********************************************************/
            // Afficher titre livre

        public function get_formulaire_commande() {
        $result = $this->db->prepare("SELECT Titre_livre, Prix_vente, Raison_sociale  FROM commander C   
        INNER JOIN livre L  ON L.id_Livre = C.id_Livre INNER JOIN fournisseur F ON C.Id_fournisseur =  F.Id_fournisseur");
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);        
    }

    public function ajouter_commande($tableau){
        
            $result = $this->db->prepare("INSERT INTO commander (Id_Livre, Id_fournisseur, Date_achat ,Prix_achat, Nbr_exemplaires )
            VALUES (?,?,?,?,?)");
            
            $result->execute($tableau);
        } 

        public function get_add_fournisseur($tableau)
        {
            $result = $this->db->prepare("INSERT INTO fournisseur (Code_fournisseur, Raison_Sociale, Rue_fournisseur,Code_postal, Localite,Pays,Tel_fournisseur,Url_fournisseur,Email_fournisseur,Fax_fournisseur)
            VALUES (?,?,?,?,?,?,?,?,?,?)");

            $result->execute($tableau);
        }

    public function get_email() 
    {
        $result = $this->db->prepare("SELECT * FROM user");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
        
    }

    public function get_delete_user($email)
    {

    $result = $this->db->prepare("DELETE FROM user WHERE email = :email");
    $result->bindValue("email", $email);
    $result->execute();
    }

    public function get_all_user_email()
    {
        $result = $this->db->prepare("SELECT * FROM user");
        $result->execute();
        return  $result->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_one_user_mail($var) 
    {
        $result = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $result->bindValue(1,$var);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
    
    
    

}
