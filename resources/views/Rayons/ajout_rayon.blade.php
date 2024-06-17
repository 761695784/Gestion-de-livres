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
        <h1 class="text-center">Creer une rayon</h1>
      
          @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>   
        @endif
          

        <form action="ajout_rayon_traitement" method="POST">
            @csrf
          <div class="mb-3">
            <label for="libelle" class="form-label">libelle</label>
            <input class="form-control @error('libelle') is-invalid @enderror" type="text" name="libelle" value="{{old('libelle')}}"  >
            @error('libelle')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="Titre" class="form-label">partie</label>
            <textarea class="form-control @error('partie') is-invalid @enderror " name="partie"  row="10" placeholder="Entrez la partie">{{old('libelle')}}</textarea> 
            @error('partie')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
         
        

          <br />
          <button type="submit" class="btn btn-primary">Creer</button>
          <a href="/liste" class="btn btn-danger">Retour</a>
        </form>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>