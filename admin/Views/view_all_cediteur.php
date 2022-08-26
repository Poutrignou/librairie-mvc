<form action="?controller=commande&action=one_cediteur" method="POST">
    <select name="cediteur" id="cediteur">
        <?php foreach ($all_cediteur as $lce):?>
        <option value="<?=$lce->Editeur?>"> <?=$lce->Editeur?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>