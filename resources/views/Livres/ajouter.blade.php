<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud sur laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center">Ajouter un Livre</h1>

        <form action="ajouter_traitement" method="POST">
            @csrf
          <div class="mb-3">
            <label for="image">Image</label>
            <input  class="form-control  @error('image') is-invalid @enderror" type="string" name="image" id="image" value="{{ old('image') }}" >
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="Titre" class="form-label">Titre</label>
            <input type="text" class="form-control  @error('titre') is-invalid @enderror " name="titre" placeholder="Entrez le titre du livre" value="{{ old('titre') }}" >
            @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
         
          <div class="mb-3">
            <label for="Auteur" class="form-label">Auteur</label>
            <input type="text" class="form-control  @error('auteur') is-invalid @enderror" name="auteur" placeholder="Entrez l'auteur du livre" value="{{ old('auteur') }}">
            @error('auteur')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="Editeur" class="form-label">Editeur</label>
            <input type="text" class="form-control  @error('editeur') is-invalid @enderror " name="editeur" placeholder="Entrez l'editeur du livre" value="{{ old('editeur') }}">
            @error('editeur')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="Identifiant" class="form-label">ISBN</label>
            <input type="text" class="form-control  @error('isbn') is-invalid @enderror" name="isbn" placeholder="Entrez l'identifiant unique du livre" value="{{ old('isbn') }}">
            @error('isbn')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>



          <div class="mb-3">
            <label for="Page" class="form-label">Nombre de page</label>
            <input type="number" class="form-control @error('nbre_page') is-invalid @enderror" name="nbre_page" placeholder="Preciser le nombre de page du livre" value="{{ old('nbre_page') }}">
            @error('nbre_page')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
         
          <div class="mb-3">
            <label for="Publication" class="form-label">Publié le</label>
            <input type="date" class="form-control @error('date_publication') is-invalid @enderror " name="date_publication" value="{{ old('date_publication') }}">
            @error('date_publication')
          <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
            <label for="rayon">Preciser le rayon </label>
            <select class="form-control" id="rayon" name="rayon_id">
              <option value="1"> Litterature</option>
              <option value="2"> Litterature</option>
              <option value="3"> Theatre</option>
              <option value="4"> Poesie</option>
            </select>
          </div>

          <div class="form-group">
            <label for="categorie">Preciser la Categorie </label>
            <select class="form-control" id="categorie" name="categorie_id">
              <option  value="1" >Roman</option>
              <option value="2">Theatre</option>
              <option value="3">Poesie</option>
              <option value="4">Non-Fiction</option> 
            </select>
          </div>

          <div class="form-group">
          <label for="statut" class="form-label">Definir le Statut</label>
          <select class="form-select" id="statut" name="statut">
            <option value="Disponible">Disponible</option>
            <option value="Indisponible">Indisponible</option>
          </select>
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Ajouter</button>
          <a href="/liste" class="btn btn-danger">Retour a la liste</a>
        </form>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>