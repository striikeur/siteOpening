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
            foreach ($listAnime as $key => $anime) {
                ?>
                <div class="card mt-3 mb-3 ml-3 mr-3" style="width: 18rem;" id="divOpening<?=$anime->getID() ?>">
                    <div id="mediaOp<?=$anime->getID() ?>">
                        <img src="<?=$anime->getMiniature() ?>"id="<?=$anime->getVideo()  ?>" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a name="animeName" href="<?=$anime->getMalLink() ?>"><?= $anime->getName()?></a></h5>
                        <button onclick="playOpening(id)" id="<?=$anime->getID()?>">Play Opening </button>
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
        <?php
        if (isset($page))
        {
        ?>
        <section>
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php if ($page == 1) echo "disabled"?>">
                        <a class="page-link" href="?page=<?= $page - 1; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <?php

                    if($page > 4) {

                        for ($i = 1; $i <= 2; $i++) {

                            ?>

                            <li class="page-item <?php if ($page == $i) echo "active"; ?>">
                                <a class="page-link" href="?page=<?= $i; ?>">
                                    <?= $i; ?>
                                </a>
                            </li>

                            <?php

                        }
                        ?>

                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">...</span>
                            </a>
                        </li>

                    <?php

                    }


                    for ($i = $page-2 ; $i <= $page + 2 ; $i++)
                    {
                        if($i < 1) { continue;}
                        if($i > $nbPages){ continue;}
                        ?>

                        <li class="page-item <?php if ($page == $i) echo "active";?>"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>

                        <?php
                    }

                    if(($page+2) < $nbPages){
                        ?>

                        <li class="page-item disabled">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">...</span>
                            </a>
                        </li>


                    <?php

                        for ($i = $nbPages - 1 ; $i <= $nbPages ; $i++)
                        {
                            ?>

                            <li class="page-item <?php if ($page == $i) echo "active";?>"><a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a></li>

                            <?php
                        }

                        }
                    ?>


                    <li class="page-item <?php if ($page == $nbPages) echo "disabled"?>">
                        <a class="page-link" href="?page=<?= $page + 1; ?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
            <?php
        }
        ?>

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
<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="view/js/main.js"></script>
<script>
    function playOpening(id){
        let btn = document.getElementById(id);
        let divVideo = document.getElementById("mediaOp"+id);
        let divOp = document.getElementById("divOpening"+id);
        divOp.style="max-width: 75rem;";
        let img = divVideo.getElementsByTagName("*");
        divVideo.innerHTML = "<video controls class=\"card-img-top\"> <source src=\""+ img[0].id +"\" type=\"video/mp4\"></video>";
        img.item(0).volume = 0.7;
        btn.disabled = true;
    }

</script>
</body>
</html>