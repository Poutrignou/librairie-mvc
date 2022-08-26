
<form action="?controller=fournisseur&action=one_rsociale" method="POST">
    <select name="raisonSocialeFournisseur" id="raisonSocialeFournisseur">
        <?php foreach ($rsfournisseur as $rsf):?>
        <option value="<?=$rsf->Raison_sociale?>"> <?=$rsf->Raison_sociale?> </option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Search">
</form>