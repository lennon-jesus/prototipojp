<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=logout" />
    <link href="style.css" rel="stylesheet">
    <title>Login - Hotel Winner</title>
  </head>
  <body>
    <!-- Navbar própria (sem botões) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light border-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img id="nav" alt="Hotel Winner" src="img/winner.png" height="70"></a>
        </div>
    </div>
    </nav>
    <!-- Cartão login -->
    <div class="card" style="width: 25rem; margin: auto; margin-top: 10%; font-size: 1.1em">
        <div class="card-body" style="width: 25rem;">
        <h5 class="card-title">Login</h5>
        <form>
            <div class="form-group mb-3">
                <label for="userInput">Usuário</label>
                <input type="text" class="form-control" id="userInput" placeholder="Insira seu usuário">
            </div>
            <div class="form-group mb-3">
                <label for="pwInput">Senha</label>
                <input type="password" class="form-control" id="pwInput" placeholder="Insira sua senha">
            </div>
            <button type="submit" class="btn btn-light">Confirmar</button>
        </form>
    </div>
    </div>
    </body>
</html>