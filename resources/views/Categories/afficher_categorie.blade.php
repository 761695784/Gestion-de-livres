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
        <div class="row">
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>   
        @endif
          <div class="cols12">

            <h1>Hello, world!</h1> <hr>
            <a href="/ajouter_categorie" class="btn btn-primary">Ajouter un categorie</a>
            <a href="/liste" class="btn btn-warning">Retour</a>
            <hr>
            
     <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Libelle</th>
                            <th>description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
        <tbody>
            @foreach($categories as $categorie)
            <tr>
                <td> {{$categorie->id}} </td> 
                <td>{{$categorie->libelle}}</td>
                <td>{{$categorie->description}}</td>
                <td><a href="/modif_categorie/{{$categorie->id}}" class="btn btn-primary">Modifier</a></td>
                <td><a href="/supprimer_categorie/{{$categorie->id}}" class="btn btn-danger">Supprimer</a></td> 
            </tr>
            @endforeach

            </tbody>
     </table>
          </div>
         
        </div>
      </div>
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>