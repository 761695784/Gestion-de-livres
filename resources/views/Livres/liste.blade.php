<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud sur laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
      
      <!-- Nouvelle section pour le champ de recherche et le bouton de recherche -->
    
      <div class="d-flex justify-content-end mb-3">
        <form class="d-flex">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    
    <style>
    .card{ 
      margin:2rem;
    }
    </style>
    <div class="container text-center">
        @auth
            <h1>Bienvenue {{ Auth::user()->name }}</h1> <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter un livre</a>
            <a href="/afficher_categorie" class="btn btn-primary">Categories</a>
            <a href="/affiche_rayon" class="btn btn-primary">Rayon</a>
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Deconnexion</button>
            </form>
        @else
            <h1>Bienvenue sur notre bibliothèque</h1>
            <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
        @endauth
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="row">
            @foreach($livres as $livre)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($livre->image) }}" class="card-img-top" style="height: 270px; object-fit:cover" alt="livre one">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Titre</strong> -> {{ $livre->titre }}</h5>
                            <p class="card-text"><strong>Ecrit par</strong> : {{ $livre->auteur }}</p>
                            <p class="card-text"><strong>Edité par</strong> : {{ $livre->editeur }}</p>
                            <p class="card-text"><strong>ISBN</strong> : {{ $livre->isbn }}</p>
                            <p class="card-text"><strong>Nombre de page</strong> : {{ $livre->nbre_page }}</p>
                            <p class="card-text"><strong>Publié le</strong> : {{ $livre->date_publication }}</p>
                            <p class="card-text"><strong>Rayon</strong> : {{ $livre->rayon->libelle }} - {{ $livre->rayon->partie }}</p>
                            <p class="card-text"><strong>Categorie</strong> : {{ $livre->categorie->libelle }}</p>
                            <span class="badge bg-success">Statut : {{ $livre->statut }}</span><br><br>
                            @auth
                                <a href="modifier/{{ $livre->id }}" class="btn btn-danger"><i class="fa-solid fa-pen" style="color: #FFD43B;"></i></a>      
                                <a href="supprimer/{{ $livre->id }}" class="btn btn-dark"><i class="fa-solid fa-trash" style="color: #c9200d;"></i></a>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
