<br/>
<!--<?=count($data)?> livre(s) trouvé(s)-->



		<?php foreach ($livre as $l):?>


        <form style="display: inline-grid" action="?controller=livre&action=modifier_livre" method="POST">
            <input name="isbnLivre_update" class="form-control" type="hidden" value="<?=$l->ISBN?>">
            <input name="titreLivre_update" class="form-control" type="text" value="<?=$l->Titre_livre?>">
            <input name="themeLivre_update" class="form-control" type="text" value="<?=$l->Theme_livre?>">
            <input name="nbrPagesLivre_update" class="form-control" type="number" value="<?=$l->Nbr_pages_livre?>">
            <input name="formatLivre_update" class="form-control" type="text" value="<?=$l->Format_livre?>">
            <input name="nomAuteur_update" class="form-control" type="text" value="<?=$l->Nom_auteur?>">
            <input name="prenomAuteur_update" class="form-control" type="text" value="<?=$l->Prenom_auteur?>">
            <input name="editeurLivre_update" class="form-control" type="text" value="<?=$l->Editeur?> ">
            <input name="anneeLivre_update" class="form-control" type="number" value="<?=$l->Annee_edition?>">
            <input name="prixLivre_update" class="form-control" type="number" value="<?=$l->Prix_vente?>">
            <input name="langueLivre_update" class="form-control" type="text" value="<?=$l->Langue_livre?>">
            <input name="Insert_update" type="submit">
        </form>
    <?php endforeach; ?>
