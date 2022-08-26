<br/>
<!--<?=count($data)?> livre(s) trouvé(s)-->

<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Prenom Nom</th>
			
		</tr>
	</thead>
	<tbody>
        <!-- &all_auteur se definie dans le foreach du controller_livre -->
		<?php foreach ($auteur as $a):?>
			<tr>
				<td> <?=$a->Prenom_auteur?>, <?=$a->Nom_auteur?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>