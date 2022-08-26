<form action="?controller=fournisseur&action=one_pays" method="POST">
    <select name="paysFournisseur" id="paysFournisseur">
        <?php foreach ($all_pays as $fp):?>
        <option value="<?=$fp->Pays?>"> <?=$fp->Pays?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>