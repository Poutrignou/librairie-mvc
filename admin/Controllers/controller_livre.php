<?php

// Le nom de la methosz sera suivi du nom de l'action

class Controller_livre extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}

	public function action_home()
	{
		$this->render("home");

	}
    //  ******************************************* LIVRE   ***********************************************************

    public function action_all_livre()
    {
        $m=Model::get_model(); //on recupere le modele,Si on a defini une methode d'accés a la bd.
        $data=["livre"=>$m->get_all_livre()]; //tableau associaltif
        $this->render("all_livre", $data);
    }

// **********************************************************TiTre**************************************************

	public function action_all_titre()
    {
        $m=Model::get_model();
        $data=["titre"=>$m->get_all_titre()];
        $this->render("all_titre", $data);
    }
    public function action_one_livre_titre()
    {
        $m=Model::get_model();
        $data=["one_livre"=>$m->get_one_livre_titre()];
        $this->render("one_livre_titre", $data);
    }

// *********************************************************AUTEUR*******************************************************

    public function action_all_auteur()
    {
        $m=Model::get_model();
        $data=["auteur"=>$m->get_all_auteur()];
        $this->render("all_auteur", $data);
    }

    public function action_par_auteur()
    {
        $m=Model::get_model();
        $data=["auteur"=>$m->get_par_auteur()];
        $this->render("par_auteur", $data);
    }

    public function action_livre_one_par_auteur()
    {
        $m=Model::get_model();
        $data=["one_livre"=>$m->get_livre_one_par_auteur()];
        $this->render("livre_one_par_auteur", $data);
    }

    // *************************************************Editeur *****************************************************************

    public function action_all_editeur()
    {
        $m=Model::get_model();
        $data=["editeur"=>$m->get_all_editeur()];
        $this->render("all_editeur", $data);
    }

    public function action_livre_one_editeur()
    {
        $m=Model::get_model();
        $data=["one_editeur"=>$m->get_livre_one_editeur()];
        
        $this->render("livre_one_editeur", $data);
    }

 // ************************************************* ajouter livre *****************************************************************
//affichage du  formualire
public function action_formulaire_livre()
{
    $this->render("formulaire_livre");
}


public function action_ajouter_livre()
    {   
        $tableau = [
        $_POST['isbnLivre'],
        $_POST['titreLivre'],
        $_POST['themeLivre'],
        (int)$_POST['nbrPagesLivre'],
        $_POST['formatLivre'],
        $_POST['nomAuteur'],
        $_POST['prenomAuteur'],
        $_POST['editeurLivre'],
        $_POST['anneeLivre'],
        (float)$_POST['prixLivre'],
        $_POST['langueLivre'],
        ];
        $m=Model::get_model(); 
        $m->get_ajouter_livre($tableau); 
        $this->render("home");
    }


 // ************************************************* effacer livre *****************************************************************

    public function action_effacer_livre()
    {
        $m=Model::get_model();
        $data=["editeur"=>$m->get_effacer_livre()];
        $this->render("success", $data);
    }

 // ************************************************* MoODIFIER  livre ****************************************************************
    public function action_selection_modifier_livre()
    {
        $m=Model::get_model();
        $data=["livre"=>$m->get_selection_modifier_livre()];
        $this->render("selection_modifier_livre", $data);
    }


public function action_modifier_livre()
    {
        if (isset($_POST['isbnLivre_update'],$_POST['titreLivre_update'],$_POST['themeLivre_update'],$_POST['nbrPagesLivre_update'],$_POST['formatLivre_update'],$_POST['nomAuteur_update'],$_POST['prenomAuteur_update'],$_POST['editeurLivre_update'],$_POST['anneeLivre_update'],$_POST['prixLivre_update'],$_POST['langueLivre_update'],$_POST['isbnLivre_update']) && (!empty($_POST['isbnLivre_update'])) && (!empty($_POST['titreLivre_update'])) && (!empty($_POST['themeLivre_update'])) && (!empty($_POST['nbrPagesLivre_update'])) && (!empty($_POST['formatLivre_update'])) && (!empty($_POST['formatLivre_update'])) && (!empty($_POST['nomAuteur_update'])) && (!empty($_POST['prenomAuteur_update'])) && (!empty($_POST['editeurLivre_update'])) &&  (!empty($_POST['anneeLivre_update'])) && (!empty($_POST['prixLivre_update'])) && (!empty($_POST['langueLivre_update'])) && (!empty($_POST['isbnLivre_update'])) && (!empty($_POST['isbnLivre_update']))) 
    {
            $tableau = [
            $_POST['isbnLivre_update'],
            $_POST['titreLivre_update'],
            $_POST['themeLivre_update'],
            (int)$_POST['nbrPagesLivre_update'],
            $_POST['formatLivre_update'],
            $_POST['nomAuteur_update'],
            $_POST['prenomAuteur_update'],
            $_POST['editeurLivre_update'],
            $_POST['anneeLivre_update'],
            (float)$_POST['prixLivre_update'],
            $_POST['langueLivre_update'],
            $_POST['isbnLivre_update'],
        ];
        $m=Model::get_model(); 
        $m->get_modifier_livre($tableau); 


        $this->render("success");
        }  else {
        $message = "Les renseignements ne sont pas valides !";
        $data = ['message' => $message];
        $this->render("Fail", $data);
    }
    }
}
?>       