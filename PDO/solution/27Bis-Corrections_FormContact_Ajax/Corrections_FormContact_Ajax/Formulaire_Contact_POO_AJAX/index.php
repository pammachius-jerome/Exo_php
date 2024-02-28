<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact - PHP-POO-AJAX</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Formulaire de Contact - PHP-POO-AJAX</h1>
    <br><br>
    <div class="container">
        <div class="success"></div>
        <form id="monform">
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="nom">Nom</label>
                    <span class="error" id="errornom"></span>
                    <input type="text" class="form-control" id="nom" name="nom" value="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="prenom">Prénom</label>
                    <span class="error" id="errorprenom"></span>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="email">Email</label>
                    <span class="error" id="erroremail"></span>
                    <input type="text" class="form-control" id="email" name="email" value="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="message">Message</label>
                    <span class="error" id="errormessage"></span>
                    <textarea class="form-control" id="message" name="message"></textarea>
                </div>
            </div>
            <button class="btn btn-light" type="reset" id="annuler">Annuler</button>
            <button class="btn btn-success" type="submit" id="submit">Envoyer</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("#submit").on("click", function(e) {

            e.preventDefault();

            let monform = document.getElementById("monform");
            let contact = new FormData(monform);

            option = {
                method: "POST",
                dataType: "JSON",
                body: contact
            }

            fetch("traitement.php", option)
                .then(response => response.json())
                .then(json => {
                    if (json.msg_doublon === "OK") {
                        $(".success").html("Ces données sont déjà en BDD !!!");
                        $(".success").css({
                            "display": "block",
                            "color": "red"
                        });
                    }

                    if (json.msg === "OK") {
                        $(".success").html("Données insérées avec succès !!!");
                        $(".success").css({
                            "display": "block",
                            "color": "greenyellow"
                        });
                    }

                    if (json.nom) {
                        $("#errornom").html(json.nom);
                        $("#errornom").css({
                            "display": "block",
                            "color": "red"
                        });
                    }else{
                        $("#errornom").html("");
                    }

                    if (json.prenom) {
                        $("#errorprenom").html(json.prenom);
                        $("#errorprenom").css({
                            "display": "block",
                            "color": "red"
                        });
                    }else{
                        $("#errorprenom").html("");
                    }

                    if (json.email) {
                        $("#erroremail").html(json.email);
                        $("#erroremail").css({
                            "display": "block",
                            "color": "red"
                        });
                    }else{
                        $("#erroremail").html("");
                    }

                    if (json.message) {
                        $("#errormessage").html(json.message);
                        $("#errormessage").css({
                            "display": "block",
                            "color": "red"
                        });
                    }else{
                        $("#errormessage").html("");
                    }

                })
                .catch((error) => {
                            console.log('Erreur : ' + error.message);
                            $(".success").html('Erreur : Un incident réseau ne permet pas de répondre favorablement à votre requête !!!');
            });

        });

        $("#nom").on("keyup", function() {

            $(this).val($(this).val().toUpperCase());
        });

        $("#prenom").on("keyup", function() {

            $(this).val($(this).val().charAt(0).toUpperCase() + $(this).val().substr(1).toLowerCase());

        });

        $("#annuler").on("click", function() {

            $(".error").html("");
            $(".success").html("");
        });
    </script>
</body>

</html>