<!-- action match avec methode dans le controller  -->
<form action="?controller=commande&action=ajouter_commande" method="POST">
    <!-- AFFICHER TITRE LIVRES -->
    <!-- titreLivre commande match avec $data -->
    <select name="titreLivre" id="titreLivre">
        <?php foreach ($titre_livre_commande as $t):?>
            <!-- Titre_livre doit avoir le meme nom que la colonne de la bdd -->
        <option value="<?=$t->Id_Livre?>"> <?=$t->Titre_livre?> </option>
        <?php endforeach; ?>
    </select>

    <!-- AFFICHER RAISON SOCIALE-->
    <select name="raisonSocialeFournisseur" id="raisonSocialeFournisseur">
        <?php foreach ($raison_sociale_commande as $rsf):?>
        <option value="<?=$rsf->Id_fournisseur?>"> <?=$rsf->Raison_sociale?> </option>
        <?php endforeach; ?>
    </select>
    <input name="qte" type="number" placeholder="Entrez la quantité">
    <input name="date" type="text" placeholder="JJ/MM/AA">
    <input name="prix" type="text" placeholder="Entrez prix">
    <input  type="submit" value="Search">
</form>