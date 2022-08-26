<?php

class Controller_commande extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}
	public function action_home()
	{
		$this->render("home");
	}
    // il va demander au model d aller cherche la liste des livres
    public function action_all_commande()
    {
		// connexion bd
        $m=Model::get_model();
        $data=["commandes"=>$m->get_all_commande()]; // $data est defini a ce moment là. On crée un tableau associatif "commande" = > $m->get_all_commande 
        $this->render("all_commander", $data);
    }

	//********************************************ALL COMMANDE PAR EDITEURS *****************************************/

    public function action_all_cediteur()
    {
        $m=Model::get_model();
        $data=["all_cediteur"=>$m->get_all_cediteur()];
        $this->render("all_cediteur", $data);
    }

	public function action_one_cediteur()
    {
        $m=Model::get_model();
        $data=["one_cediteur"=>$m->get_one_cediteur()];
        $this->render("one_cediteur", $data);
    }

//********************************************ALL COMMANDE PAR FOURNISSEUR *****************************************/

	public function action_all_cfournisseur()
    {
        $m=Model::get_model();
        $data=["all_cfournisseur"=>$m->get_all_cfournisseur()];
        $this->render("all_cfournisseur", $data);
    }	

		public function action_one_cfournisseur()
    {
        $m=Model::get_model();
        $data=["one_cfournisseur"=>$m->get_one_cfournisseur()];
        $this->render("one_cfournisseur", $data);
    }

	public function action_all_cdate()
    {
        $m=Model::get_model();
        $data=["all_cdate"=>$m->get_all_cdate()];
        $this->render("all_cdate", $data);
    }	

		public function action_one_cdate()
    {
        $m=Model::get_model();
        $data=["one_cdate"=>$m->get_one_cdate()];
        $this->render("one_cdate", $data);
    }

    //******************************************************ADD COMMANDE*********************************************************** */

	public function action_formulaire_commande()
    {
        $m=Model::get_model(); 
        // get_formulaire_commande doit match avec une methode du model, on peut appeler differentes methodes du model.
        $data=["titre_livre_commande"=>$m->get_all_livre(),
                "raison_sociale_commande"=>$m->get_all_rsociale()];
        // formulaire_commande doit matcher avec une view
        $this->render("formulaire_commande", $data);

    }
    
    public function action_ajouter_commande()
    {
        // J'annonce que mon probleme vient de la !
            $tableau = [
            (int)$_POST ['titreLivre'],
            (int)$_POST ['raisonSocialeFournisseur'],
            $_POST ['date'],
            (int)$_POST ['prix'],
            (int)$_POST ['qte']];
            $m=Model::get_model() ;
            $m->ajouter_commande($tableau);
            $this->render("success");    
        }
}

