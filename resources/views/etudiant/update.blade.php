<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 10</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.css.map">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>MODIFIER UN ETUDIANT-LARAVEL 10</h1>
                <hr>
                @if (session('status'))
                <div class="alert alert-succes">
                    {{session('status')}}
                </div>
                @endif

<ul>
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{$error}}</li>
    @endforeach
</ul>
<form action="/update/traitement" method="POST" class="form-group">
    @csrf
    <input type="text" name="id" style="display: none" value="{{ $etudiants->id }}">
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">
                </div>
                <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">
                </div>
                <div class="form-group">
                    <label for="Classe">Classe</label>
                    <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}">
                </div><br>
<button type="submit" class="btn btn-primary">MODIFIER UN ETUDIANT</button><br><br>
<a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>
</form>

            </div>
          </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="bootstrap.bundle.js.map"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
