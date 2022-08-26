<?php

class Controller_fournisseur extends Controller
{
	public function action_default()
	{
		$this->action_home();
	}
	public function action_home()
	{
		$this->render("home");
	}

    //***********************************************************************************************************/

    // il va demander au model d aller cchercher la list des livres
    public function action_all_fournisseur()
    {
        $m=Model::get_model();
        $data=["fournisseurs"=>$m->get_all_fournisseur()];
        $this->render("all_fournisseur", $data);
    }

	//*********************************************** RAISON SOCIALE ********************************************/

	public function action_all_rsociale()
    {
        $m=Model::get_model();
        $data=["rsfournisseur"=>$m->get_all_rsociale()];
        $this->render("all_rsociale", $data);
    }

    public function action_one_rsociale()
    {
        $m=Model::get_model();
        $data=["one_rsociale"=>$m->get_one_rsociale()];
        $this->render("one_rsociale", $data);
    }

    //*********************************************** LOCALITE ********************************************/

    public function action_all_localite()
    {
        $m=Model::get_model();
        $data=["all_localite"=>$m->get_all_localite()];
        $this->render("all_localite", $data);
    }
    public function action_one_localite()
    {
        $m=Model::get_model();
        $data=["one_localite"=>$m->get_one_localite()];
        $this->render("one_localite", $data);
    }
       //*********************************************** PAYS ********************************************/
    
    public function action_all_pays()
    {
        $m=Model::get_model();
        $data=["all_pays"=>$m->get_all_pays()];
        $this->render("all_pays", $data);
    }
    public function action_one_pays()
    {
        $m=Model::get_model();
        $data=["one_pays"=>$m->get_one_pays()];
        $this->render("one_pays", $data);
    }

    public function action_ajouter_fournisseur()
    {
        $this->render("formulaire_fournisseur");
    }

    public function action_add_fournisseur() 
    {
    $tableau = [

    $_POST['Code_fournisseur'],
    $_POST['Raison_Sociale'],
    $_POST['Rue_fournisseur'],
    $_POST['Code_postal'],
    $_POST['Localite'],
    $_POST['Pays'],
    $_POST['Tel_fournisseur'],
    $_POST['Url_fournisseur'],
    $_POST['Email_fournisseur'],
    $_POST['Fax_fournisseur']
    ];
    var_dump($tableau);
    $m=Model::get_model();
    $m->get_add_fournisseur($tableau);
    $this->action_all_fournisseur();
    }
}
?>