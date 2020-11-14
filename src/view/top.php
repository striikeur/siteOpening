<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/meta.php'; ?>
    <link rel="stylesheet" type="text/css" href="/res/css/styleSheet.css">
    <link rel="stylesheet" href="view/style/general.css" type="text/css" />
    <title>Top Opening 2020</title>
</head>

<body>
<?php
// Vérification des données provenant du modèle
if (isset($listAnime))
{
    ?>
    <div id="particles-js"></div>

    <header>
        <?php include 'includes/header.php'; ?>
    </header>

    <main>
        <section class="d-flex justify-content-center flex-wrap" >
            <?php
            foreach ($listAnime as $key=>$anime) {
                ?>
                <div class="card mt-3 mb-3 ml-3 mr-3" style=" width: 25rem;">
                    <video controls class="card-img-top">
                        <source src="<?=$anime->getVideo() ?>" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="card-title"><a name="animeName" href="<?=$anime->getMalLink() ?>"><?= $anime->getName()?></a></h5>
                        <div>
                            <?php
                            if (isset($user))
                            {
                                $note =  $user->getNote()->getNoteByAnimePseudo($anime->getName(), $user->getPseudo());

                                ?>
                            <label>Note de la musique :</label>
                            <input name="noteMusique" type="number" max="5" min="0" id="NoteMusique<?=$anime->getID() ?>" required value="<?= $note->getNoteMusique()?>" oninput="noteMusiqueFunction(value, id)"/>
                            <br>
                            <label>Note de la Vidéo :</label>
                            <input name="noteVideo" type="number" max="5" min="0" id="NoteVideo<?=$anime->getID() ?>" required value="<?= $note->getNoteVideo()?>" oninput="noteVideoFunction(value, id)"/>
                            <br>
                            <label id="NoteFinale<?=$anime->getID() ?>" name="noteTotale">Note Finale <?= $note->getNoteTotale()?> </label>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </section>

    </main>

    <footer class="mt-auto">
        <?php include 'includes/footer.php'; ?>
    </footer>

    <?php
}
else {
    require 'errors/error.php';
}
?>

<script src="view/bootstrap/js/jquery.js"></script>
<script src="view/bootstrap/js/bootstrap.js"></script>
<script src="view/js/particles.js"></script>
<script src="view/js/app.js"></script>
<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="view/js/main.js"></script>
</body>
</html>