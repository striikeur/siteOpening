<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="view/style/general.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="view/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="view/style/error.css" type="text/css" />

    <title>Erreur | ProgWeb</title>
</head>

<body>
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <div class="text-center">
                <span class="error mx-auto" data-text="ERROR">ERROR</span>
                <p>
                    <?php
                    if (isset($dViewError)) {
                        foreach ($dViewError as $value){
                            echo $value."<br/>";
                        }
                    }
                    ?>
                </p>
                <a href="?action="><button type="button" class="btn btn-info"><img src="view/style/icons/arrow-bar-left.svg" alt="" width="24" height="24"> Retourner à l'accueil</button></a>
            </div>
        </div>
    </div>
</div>

<script src="view/bootstrap/js/jquery.js"></script>
<script src="view/bootstrap/js/bootstrap.js"></script>
</body>
</html>