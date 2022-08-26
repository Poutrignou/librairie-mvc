<h2>Veuillez entrer les références d'un nouveau livre.</h2>
<form style="display: inline-grid" action="?controller=livre&action=ajouter_livre" method="POST">
    <input name="isbnLivre" class="form-control" type="text" placeholder="Ecriver l'Isbn">
    <input name="titreLivre" class="form-control" type="text" placeholder="Titre livre">
    <input name="themeLivre" class="form-control" type="text" placeholder="Theme du livre">
    <input name="nbrPagesLivre" class="form-control" type="number" placeholder="Nombre de pages">
    <input name="formatLivre" class="form-control" type="text" placeholder="Format du livre">
    <input name="nomAuteur" class="form-control" type="text" placeholder="Nom de l'auteur">
    <input name="prenomAuteur" class="form-control" type="text" placeholder="Prenom de l'auteur">
    <input name="editeurLivre" class="form-control" type="text" placeholder="Editeur">
    <input name="anneeLivre" class="form-control" type="number" placeholder="Année d'edition">
    <input name="prixLivre" class="form-control" type="number" placeholder="Prix de vente">
    <input name="langueLivre" class="form-control" type="text" placeholder="Langue du livre">
	<input name="Insert" type="submit">
</form>