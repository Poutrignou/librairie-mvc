Model : vont iteragir avec des données, recuperer des informations.
Controller : traiter les informations, faire appel au model.
view : generer le code html.d



    //***********************************************************MATCH**************************************************//
<!-- action match avec methode dans le controller  -->
<form action="?controller=commande&action=titre_livre_commande" method="POST">
    <!-- AFFICHER TITRE LIVRES -->
    <!-- titreLivre commande match avec $data -->
    <select name="titreLivre" id="titreLivre">
        <?php foreach ($titre_livre_commande as $t):?>
        <option value="<?=$t->Titre_livre?>"> <?=$t->Titre_livre?> </option>
        <?php endforeach; ?>
    </select>
    <!-- AFFICHER RAISON SOCIALE-->
    <select name="raisonSocialeFournisseur" id="raisonSocialeFournisseur">
        <?php foreach ($rsfournisseur as $rsf):?>
        <option value="<?=$rsf->Raison_sociale?>"> <?=$rsf->Raison_sociale?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>

<?php
	public function action_formulaire_commande()
    {
        $m=Model::get_model();
        // get_formulaire_commande doir match avec une methode du model
        $data=["titre_livre_commande"=>$m->get_formulaire_commande()];
        // formulaire_commande doit matcher avec une view
        $this->render("formulaire_commande", $data);
    }

    ***************************************** L E  H O M E *********************************************************

    require_once 'Controllers/Controller.php';
    require_once 'Models/Model.php';
    require_once 'Utils/Header4.php';

    $controllers=["home", "livre", "fournisseur", "commande", "option"];

    $controller_defaut="home";

     in_array — Indique si une valeur appartient à un tableau,

    if (isset($_GET['controller']) and in_array($_GET['controller'],$controllers)) {

        $nom_controller=$_GET['controller'];
    } else {

        $nom_controller=$controller_defaut;
    }

    $nom_classe="Controller_".$nom_controller;
    $nom_fichier="Controllers/".$nom_classe.".php";

    if(file_exists($nom_fichier)) {
        require_once($nom_fichier);
        $controller=new $nom_classe();
    } else {
        exit("Error 404 : not found");
    }
    require_once 'Utils/Footer.php';

******************************************  Controller   ***********************************************************//


    protected function render ($vue, $data=[])
    {

        extract : extract — Importe les variables dans la table des symboles : Un tableau associatif. Cette fonction crée les variables dont les noms sont les index de ce tableau, et leur affecte la valeur associée. Pour chaque paire clé/valeur, extract() crée une variable, avec les paramètres flags et prefix.   extract() vérifie chaque clé afin de contrôler si elle a un nom de variable valide. Elle vérifie également les collisions avec des variables existantes dans la table des symboles.

        extract($data);

        $file_name="Views/view_".$vue.".php";

        file_exists — Vérifie si un fichier ou un dossier existe
        Si le dossier view existe alors on le require.
        if (file_exists($file_name)) {
            require($file_name);
        } else {
            $this->action_error("pas de vue");
        }
    }
    protected function action_error($message) 
    {
        $data=['error'=>$message];
        $this->render('error', $data);

        Affiche un message et termine le script courant
        Termine le script courant. Les fonctions d'extinction et les destructeurs d'objets seront toujours exécutés même si exit est appelé.
exit est une construction de langage et peut être appelé sans parenthèse si aucun paramètre status n'est passé.
        die();
    }
}
************************************************************************************************************************************************



<td><a href="?controller=livre&action=effacer_livre&isbn=<?=$l->ISBN?>">Effacer</a></td>

    public function get_effacer_livre() {
        $var = $_GET['isbn'];
        $result = $this->db->prepare("DELETE FROM livre WHERE ISBN = ?");
        $result->bindparam(1, $var);
        $result->execute();
        return $result->fetchALL(PDO::FETCH_OBJ);
    }




