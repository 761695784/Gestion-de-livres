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
        <h1 class="text-center">Formulaire d'inscription</h1>
      @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
      </div>
      @endif
        
        <ul>
          @foreach ($errors->all() as $error)
          <li class="alert alert-danger">
            {{$error}}
         </li>
          @endforeach
        </ul>
          

        <form action="{{route('register')}}" method="POST">
            @csrf
          <div class="mb-3">
            <label for="Nom complet" class="form-label">Nom complet</label>
            <input type="text" class="form-control" name="name" placeholder="Entrez votre Nom complet">
          </div>
         
          <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Entrez votre Email ">
          </div>

          <div class="mb-3">
            <label for="Mot de passe" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" placeholder="Entrez le Mot de passe">
          </div>

       
          <br />
          <button type="submit" class="btn btn-primary">Confirmer</button>
          <a href="/login" class="btn btn-danger">Annuler</a>
        </form>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>