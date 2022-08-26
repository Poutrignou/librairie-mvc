<form action="?controller=fournisseur&action=one_localite" method="POST">
    <select name="localiteFournisseur" id="localiteFournisseur">
        <?php foreach ($all_localite as $lf):?>
        <option value="<?=$lf->Localite?>"> <?=$lf->Localite?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>