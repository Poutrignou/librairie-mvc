<form action="?controller=livre&action=livre_one_par_auteur" method="POST">
    <select name="auteurLivre" id="auteurLivre">
        <?php foreach ($auteur as $a):?>
        <option value="<?=$a->Nom_auteur?>"> <?=$a->Nom_auteur?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>