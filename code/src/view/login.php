<!doctype html>
<html lang="fr">
<head>
    <?php include 'includes/meta.php'; ?>
    <link href="view/style/login.css" rel="stylesheet">

    <title>Connexion</title>
</head>

<body class="text-center">
<form class="form-signin" method="post">
    <img class="mb-4" src="view/style/icons/gear-wide-connected.svg" alt="" width="72" height="72">

    <h1 class="h3 mb-3 font-weight-normal">Veuillez vous connecter</h1>

    <?php
    if (isset($dViewError) && count($dViewError)>0) {
        ?>
        <div class="alert alert-danger" role="alert">
            <?php
            foreach ($dViewError as $value){
                echo $value.'<br/>';
            }
            ?>
        </div>
        <?php
    }
    ?>

    <label for="inputPseudo" class="sr-only">Pseudo</label>
    <input name="pseudo" type="text" id="inputPseudo" class="form-control" placeholder="Pseudo" required autofocus>
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

    <!--			<div class="checkbox mb-3">-->
    <!--				<label>-->
    <!--					<input name="recall" type="checkbox" value="remember-me"> Se souvenir de moi-->
    <!--				</label>-->
    <!--			</div>-->

    <input type="hidden" name="action" value="connection">

    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
    <p class="mt-1 mb-3 text-muted">&copy; 2019-2020</p>
</form>

<script src="view/bootstrap/js/jquery.js"></script>
<script src="view/bootstrap/js/bootstrap.js"></script>
</body>

</html>
