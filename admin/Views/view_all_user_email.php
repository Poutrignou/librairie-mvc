<br/>
<!--<?=count($data)?> livre(s) trouvé(s)-->

<form action="?controller=user&action=one_user_email" method="POST">

        <select name="all_user_email" id="all_user_email">
        <?php foreach($users as $user) :?>
            <option value="<?=$user->email?>"> <?=$user->email?></option>
        <?php endforeach; ?>
        </select>
    <input type="submit">
</form>