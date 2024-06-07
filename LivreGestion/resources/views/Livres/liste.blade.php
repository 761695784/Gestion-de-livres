<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud sur laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">
            <h1>Hello, world!</h1> <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter un livre</a><hr>
       
            
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>   
        @endif
            
            <div class="row">
              <div class="row">
                @foreach($livres as $livre)
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                      
                        <img src="{{asset ($livre->image)}}" class="card-img-top" alt="livre one">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Titre</strong> -> {{$livre->titre}}</h5>
                            <p class="card-text"><strong>Ecrit par</strong> : {{$livre->auteur}}</p>
                            <p class="card-text"><strong>Edité par</strong> : {{$livre->editeur}}</p>
                            <p class="card-text"><strong>ISBN</strong> : {{$livre->isbn}}</p>
                            <p class="card-text"><strong>Nombre de page</strong> : {{$livre->nbre_page}}</p>
                            <p class="card-text"><strong>Publié le</strong> : {{$livre->date_publication}}</p>
                            <p class="card-text"><strong>Rayon</strong> : {{ $livre->rayon->libelle }} - {{ $livre->rayon->partie }} </p>
                            <p class="card-text"><strong>Categorie</strong> : {{$livre->categorie->libelle}}</p>
                
                        <a href="#" class="btn btn-info">Voir plus</a>  
                                              
                            <hr>
                            <a href="modifier/{{$livre->id}}" class="btn btn-warning">Modifier</a>
                         
                            <a href="#" class="btn btn-danger">Supprimer</a>
                     
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
    </html>