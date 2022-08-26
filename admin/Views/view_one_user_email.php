
<table class='table table-bordered table-responsive-md bg_table'>
    <thead>
        <tr>
            <th>Email</th>
            <th>Password</th>
            <th>Rank</th>

        </tr>
    </thead>
    <tbody>
		<?php foreach ($users as $u):?>
            <tr>
                <td> <?=$u->email?></td>
                <td><?=$u->password?></td>
                <td><?=$u->rank?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>