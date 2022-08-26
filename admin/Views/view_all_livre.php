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
			<th>Effacer</th>
			<th>Modifier</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($livre as $l):?>
			<tr>
				<td> <?=$l->ISBN?> </td>
				<td> <?=$l->Titre_livre?> </td>
				<td> <?=$l->Theme_livre?> </td>
				<td> <?=$l->Nbr_pages_livre?> </td>
				<td> <?=$l->Format_livre?> </td>
				<td> <?=$l->Nom_auteur?> <?=$l->Prenom_auteur?></td>
				<td> <?=$l->Editeur?> </td>
				<td> <?=$l->Annee_edition?> </td>
				<td> <?=$l->Prix_vente?> </td>
				<td> <?=$l->Langue_livre?> </td>
				<td><a href="?controller=livre&action=effacer_livre&isbn=<?=$l->ISBN?>">Effacer</a></td>
				<td><a href="?controller=livre&action=selection_modifier_livre&isbn=<?=$l->ISBN?>">Modifier</a></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>