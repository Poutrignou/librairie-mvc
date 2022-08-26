
<form action="?controller=livre&action=livre_one_editeur" method="POST">
    <select name="editeurLivre" id="editeurLivre">
        <?php foreach ($editeur as $a):?>
        <option value="<?=$a->Editeur?>"> <?=$a->Editeur?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>