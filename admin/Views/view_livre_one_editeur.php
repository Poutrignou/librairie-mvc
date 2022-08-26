<br/>
<!--<?=count($data)?> livre(s) trouvé(s)-->

<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>ISBN</th>
			<th>Titre</th>
			<th>Thème</th>
			<th>Nombre de page</th>
			<th>Format</th>
			<th>Auteur</th>
			<th>Editeur</th>
			<th>Année d'édition</th>
			<th>Prix</th>
			<th>Langue</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($one_editeur as $oe):?>
			<tr>
				<td> <?=$oe->ISBN?> </td>
				<td> <?=$oe->Titre_livre?> </td>
				<td> <?=$oe->Theme_livre?> </td>
				<td> <?=$oe->Nbr_pages_livre?> </td>
				<td> <?=$oe->Format_livre?> </td>
				<td> <?=$oe->Nom_auteur?></td>
				<td> <?=$oe->Editeur?> </td>
				<td> <?=$oe->Annee_edition?> </td>
				<td> <?=$oe->Prix_vente?> </td>
				<td> <?=$oe->Langue_livre?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>