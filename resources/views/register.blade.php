<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form {
            width: 300px; /* Définir la largeur du formulaire */
            /* Ajouter d'autres styles si nécessaire */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class ="row">
          <div class="col-md-4col-md-offset-4" style="margin-top:20px">
            <h4>Inscription</h4>
            <hr>
            <form>
                <div class="form-group">
                    <label for="name">PRENOM</label><br>
                    <input type="text" class ="form-control" placeholder="Entrer votre prenom" name="name" value=""><br>
                </div>
                <div class="form-group">
                    <label for="name">NOM</label><br>
                    <input type="text" class ="form-control" placeholder="Entrer votre nom" name="name" value=""><br>
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="text" class ="form-control" placeholder="Entrer votre adresse mail" name="name" value=""><br>
                </div>
                <div class="form-group">
                    <label for="password">TELEPHONE</label>
                    <input type="text" class ="form-control" placeholder="Entrer votre numero de telephone" name="name" value="">
                </div>

                <hr>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Se connecter</button>
                    </div>
                    <a href="registration">Nouveau utilisateur !! Register here.</a>
            </form>
          </div>

        </div>

    </div>



</body>
</html>
