<br/>
<!--<?=count($data)?> livre(s) trouvé(s)-->

<table class='table table-bordered table-responsive-md bg_table'>
	<thead>
		<tr>
			<th>Id_fournisseur</th>
			<th>Code_fournisseur</th>
			<th>Raison_sociale</th>
			<th>Rue_fournisseur</th>
			<th>Code_postal</th>
			<th>Localite</th>
			<th>Pays</th>
			<th>Tel_fournisseur</th>
			<th>Url_fournisseur</th>
            <th>Email_fournisseur</th>
			<th>Fax_fournisseur</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($one_pays as $f):?>
			<tr>
				<td> <?=$f->Id_fournisseur?> </td>
				<td> <?=$f->Code_fournisseur?> </td>
				<td> <?=$f->Raison_sociale?> </td>
				<td> <?=$f->Rue_fournisseur?> </td>
				<td> <?=$f->Code_postal?> </td>
				<td> <?=$f->Localite?></td>
				<td> <?=$f->Pays?> </td>
				<td> <?=$f->Tel_fournisseur?> </td>
				<td> <?=$f->Url_fournisseur?> </td>
				<td> <?=$f->Email_fournisseur?> </td>
                <td> <?=$f->Fax_fournisseur?> </td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>