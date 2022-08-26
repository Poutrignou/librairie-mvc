<br/>
<!--<?=count($data)?> livre(s) trouvé(s)-->

<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Id_commande</th>
			<th>Titre_livre</th>
			<th>Raison_sociale</th>
			<th>Editeur</th>
			<th>Date_achat</th>
			<th>Prix_achat</th>
            <th>Nbr_exemplaires</th>

		</tr>
	</thead>
	<tbody>
		<?php foreach ($one_cfournisseur as $c):?>
			<tr>
				<td> <?=$c->Id_commande?> </td>
				<td> <?=$c->Titre_livre?> </td>
				<td> <?=$c->Raison_sociale?> </td>
				<td> <?=$c->Editeur?> </td>
				<td> <?=$c->Date_achat?> </td>
				<td> <?=$c->Prix_achat?> </td>
                <td> <?=$c->Nbr_exemplaires?> </td>

			</tr>
		<?php endforeach; ?>
	</tbody>
</table>