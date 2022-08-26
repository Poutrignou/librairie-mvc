<h1>Données utilisateurs</h1>

<table>
    <thead>
        <tr>
            <th>email</th>
            <th>password</th>
            <th>rank</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td> <?= $user->email ?> </td>
            <td> <?= $user->password ?> </td>
            <td> <?= $user->rank ?> </td>
            <td> <a href="?controller=user&action=delete_user&id=<?=$user->email?> ">Supprimer</a> </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>