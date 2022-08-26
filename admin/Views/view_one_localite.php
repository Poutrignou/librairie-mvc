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
		<?php foreach ($one_localite as $lf):?>
			<trl>
				<td> <?=$lf->Id_fournisseur?> </td>
				<td> <?=$lf->Code_fournisseur?> </td>
				<td> <?=$lf->Raison_sociale?> </td>
				<td> <?=$lf->Rue_fournisseur?> </td>
				<td> <?=$lf->Code_postal?> </td>
				<td> <?=$lf->Localite?></td>
				<td> <?=$lf->Pays?> </td>
				<td> <?=$lf->Tel_fournisseur?> </td>
				<td> <?=$lf->Url_fournisseur?> </td>
				<td> <?=$lf->Email_fournisseur?> </td>
                <td> <?=$lf->Fax_fournisseur?> </td>
			</trl
		<?php endforeach; ?>
	</tbody>
</table>