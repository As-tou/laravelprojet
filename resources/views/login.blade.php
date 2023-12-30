<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(0, 255, 179);
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

          <div class="text-center m-5" style="margin-top:20px">
            <h4>Connexion</h4>
            <hr>
            <form>
                <div class="form-group">
                    <label for="password">MOT DE PASSE</label>
                    <input type="password" class ="form-control" placeholder="Entrer votre mot de passe" name="name" value="">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="text" class ="form-control" placeholder="Entrer votre adresse email" name="name" value="">
                </div>
                <hr>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Register</button>
                    </div>
                    <a href="login">Already registered !! login here.</a>
            </form>
          </div>

        </div>

    </div>

</body>
</html>
