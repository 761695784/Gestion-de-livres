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
        <h1 class="text-center">Formulaire de Connexion</h1>
        @if(Session::has('error'))
          <div class="alert alert-danger" role="alert">
            {{Session::get('error')}}
          </div>
          @endif
        <form action="{{route('login')}}" method="POST">
            @csrf
          <div class="mb-3">
            <label for="email">Email:</label>
            <input class="form-control  @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
        
            <label for="password">Password:</label>
            <input  class="form-control  @error('password') is-invalid @enderror" type="password" name="password" id="password">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
         
        

          <br/>
          <button type="submit" class="btn btn-primary">Connexion</button>
          <a href="/register" class="btn btn-danger">M'inscrire</a>
        </form>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>