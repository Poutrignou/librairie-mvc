<form action="?controller=commande&action=one_cfournisseur" method="POST">
    <select name="cfournisseur" id="cfournisseur">
        <?php foreach ($all_cfournisseur as $cf):?>
        <option value="<?=$cf->Raison_sociale?>"> <?=$cf->Raison_sociale?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>