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
        <h1 class="text-center">Modifier un Livre</h1>
      
    

        <form action="/modifier/modifier_traitement" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$livre->id}}">
          <div class="mb-3">
            <label for="Image" class="form-label">Image</label>
            <input class="form-control" type="string" name="image" value="{{$livre->image}}">
          </div>
          <div class="mb-3">
            <label for="Titre" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" value="{{$livre->titre}}">
          </div>
         
          <div class="mb-3">
            <label for="Auteur" class="form-label">Auteur</label>
            <input type="text" class="form-control" name="auteur" value="{{$livre->auteur}}">
          </div>

          <div class="mb-3">
            <label for="Editeur" class="form-label">Editeur</label>
            <input type="text" class="form-control" name="editeur" value="{{$livre->editeur}}">
          </div>

          <div class="mb-3">
            <label for="Identifiant" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" value="{{$livre->isbn}}">
          </div>



          <div class="mb-3">
            <label for="Page" class="form-label">Nombre de page</label>
            <input type="number" class="form-control" name="nbre_page" value="{{$livre->nbre_page}}">
          </div>
         
          <div class="mb-3">
            <label for="Publication" class="form-label">Publié le</label>
            <input type="date" class="form-control" name="date_publication" value="{{$livre->date_publication}}">
          </div>

          <div class="form-group">
            <label for="rayon">Preciser le rayon </label>
            <select class="form-control" id="rayon" name="rayon_id">
                <option value="1" {{ $livre->rayon_id == 1 ? 'selected' : '' }}>Littérature</option>
                <option value="2" {{ $livre->rayon_id == 2 ? 'selected' : '' }}>Théâtre</option>
                <option value="3" {{ $livre->rayon_id == 3 ? 'selected' : '' }}>Poésie</option>
                <option value="4" {{ $livre->rayon_id == 4 ? 'selected' : '' }}>Non-Fiction</option>
              </select>
          </div>

          <div class="form-group">
            <label for="categorie">Preciser la Categorie </label>
            <select class="form-control" id="categorie" name="categorie_id">
                <option value="1" {{ $livre->categorie_id == 1 ? 'selected' : '' }}>Roman</option>
                <option value="2" {{ $livre->categorie_id == 2 ? 'selected' : '' }}>Théâtre</option>
                <option value="3" {{ $livre->categorie_id == 3 ? 'selected' : '' }}>Poésie</option>
                <option value="4" {{ $livre->categorie_id == 4 ? 'selected' : '' }}>Non-Fiction</option>
              </select>
          </div>
          <br />
          <button type="submit" class="btn btn-primary">Modifier</button>
          <a href="/liste" class="btn btn-danger">Annuler</a>
        </form>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>