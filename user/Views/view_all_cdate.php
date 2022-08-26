<form action="?controller=commande&action=one_cdate" method="POST">
    <select name="cdate" id="cdate">
        <?php foreach ($all_cdate as $lcd):?>
        <option value="<?=$lcd->Date_achat?>"> <?=$lcd->Date_achat?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>