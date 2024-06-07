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
      
        
        <ul>
          @foreach ($errors->all() as $error)
          <li class="alert alert-danger">
            {{$error}}
         </li>
          @endforeach
        </ul>
          

        <form action="ajouter_traitement" method="POST">
            @csrf
          <div class="mb-3">
            <label for="Image" class="form-label">Image</label>
            <input class="form-control" type="string" name="image"  >
          </div>
          <div class="mb-3">
            <label for="Titre" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" placeholder="Entrez le titre du livre">
          </div>
         
          <div class="mb-3">
            <label for="Auteur" class="form-label">Auteur</label>
            <input type="text" class="form-control" name="auteur" placeholder="Entrez l'auteur du livre">
          </div>

          <div class="mb-3">
            <label for="Editeur" class="form-label">Editeur</label>
            <input type="text" class="form-control" name="editeur" placeholder="Entrez l'editeur du livre">
          </div>

          <div class="mb-3">
            <label for="Identifiant" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" placeholder="Entrez l'identifiant unique du livre">
          </div>



          <div class="mb-3">
            <label for="Page" class="form-label">Nombre de page</label>
            <input type="number" class="form-control" name="nbre_page" placeholder="Preciser le nombre de page du livre">
          </div>
         
          <div class="mb-3">
            <label for="Publication" class="form-label">Publié le</label>
            <input type="date" class="form-control" name="date_publication" >
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
          <br />
          <button type="submit" class="btn btn-primary">Ajouter</button>
          <a href="/liste" class="btn btn-danger">Retour a la liste</a>
        </form>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>