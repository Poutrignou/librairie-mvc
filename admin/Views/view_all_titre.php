<form action="?controller=livre&action=one_livre_titre" method="POST">
    <select name="titreLivre" id="titreLivre">
        <?php foreach ($titre as $t):?>
        <option value="<?=$t->Titre_livre?>"> <?=$t->Titre_livre?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>
