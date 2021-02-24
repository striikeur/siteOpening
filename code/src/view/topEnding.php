<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/meta.php'; ?>
    <link rel="stylesheet" type="text/css" href="/res/css/styleSheet.css">
    <link rel="stylesheet" href="view/style/general.css" type="text/css" />
    <title>Top Ending 2020</title>
</head>

<body>
<?php
if (isset($listAnime))
{
    ?>
    <div id="particles-js"></div>

    <header>
        <?php include 'includes/headerEnding.php'; ?>
    </header>

    <main>
        <section class="d-flex justify-content-center flex-wrap" >
            <?php
            foreach ($listAnime as $key => $anime) {
                ?>
                <div class="card mt-3 mb-3 ml-3 mr-3" style="width: 18rem;" id="divEnding<?=$anime->getID() ?>">
                    <div id="mediaOp<?=$anime->getID() ?>">
                        <img src="<?=$anime->getMiniature() ?>"id="<?=$anime->getVideo()  ?>" class="card-img-top">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a name="animeName" href="<?=$anime->getMalLink() ?>"><?= $anime->getName()?></a></h5>
                        <button onclick="playEnding(id)" id="<?=$anime->getID()?>">Play Ending </button>
                        <div>
                            <?php
                            if (isset($userEnding))
                            {
                                $note =  $userEnding->getNote()->getNoteByAnimePseudoEnding($anime->getName(), $userEnding->getPseudo());

                                ?>
                                <label>Note de la musique  (sur 7):</label>
                                <input name="noteMusique" type="number" max="7" min="0" id="NoteMusique<?=$anime->getID() ?>" required value="<?= $note->getNoteMusique()?>" oninput="noteMusiqueFunction(value, id)"/>
                                <br>
                                <label>Note de la Vidéo (sur 3):</label>
                                <input name="noteVideo" type="number" max="3" min="0" id="NoteVideo<?=$anime->getID() ?>" required value="<?= $note->getNoteVideo()?>" oninput="noteVideoFunction(value, id)"/>
                                <br>
                                <label id="NoteFinale<?=$anime->getID() ?>" name="noteTotale">Note Finale : <?= $note->getNoteTotale()?> </label>
                                <?php
                            }
                            ?>
                            <div>
                                <?php if($anime->getSpoiler() == 1){

                                    ?>
                                    <label> Attention SPOIL </label>
                                    <?php
                                } else {
                                ?>
                                <input type="checkbox" id="Spoiler<?=$anime->getId()?>" oninput="onCheckboxSpoiler(id)"> <label> A cocher si l'ending spoil </label>
                                <?php
                                }
                                ?>
                            </div>
                            <div>
                                <?php if($anime->getNsfw() == 1){

                                    ?>
                                    <label> Attention NSFW  </label>
                                    <?php
                                } else {
                                    ?>
                                    <input type="checkbox" id="NSFW<?=$anime->getId()?>"  oninput="onCheckBoxNSFW(id)"> <label>  A cocher si l'ending est NSFW  </label>
                                    <?php
                                }
                                ?>
                            </div>

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
                            <a class="page-link" href="?page=<?= $page - 1; ?>&ending" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <?php

                        if($page > 4) {

                            for ($i = 1; $i <= 2; $i++) {

                                ?>

                                <li class="page-item <?php if ($page == $i) echo "active"; ?>">
                                    <a class="page-link" href="?page=<?= $i; ?>&ending">
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

                            <li class="page-item <?php if ($page == $i) echo "active";?>"><a class="page-link" href="?page=<?= $i; ?>&ending"><?= $i; ?></a></li>

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

                                <li class="page-item <?php if ($page == $i) echo "active";?>"><a class="page-link" href="?page=<?= $i; ?>&ending"><?= $i; ?></a></li>

                                <?php
                            }

                        }
                        ?>


                        <li class="page-item <?php if ($page == $nbPages) echo "disabled"?>">
                            <a class="page-link" href="?page=<?= $page + 1; ?>&ending" aria-label="Next">
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
<script src="view/js/ending.js"></script>
<script>
    function playEnding(id){
        let btn = document.getElementById(id);
        let divVideo = document.getElementById("mediaOp"+id);
        let divOp = document.getElementById("divEnding"+id);
        divOp.style="max-width: 75rem;";
        let img = divVideo.getElementsByTagName("*");
        divVideo.innerHTML = "<video controls class=\"card-img-top\"> <source src=\""+ img[0].id +"\" type=\"video/mp4\"></video>";
        img.item(0).volume = 0.7;
        btn.disabled = true;
    }
    function onCheckBoxNSFW(id) {
        let idAnime = id.substring(4);
        if (id.includes('NSFW')) {
            console.log(typeof (idAnime));
            $.ajax({
                url: '?action=nsfw&ending',
                type: 'POST',
                data: 'nsfw=' + 1 + '&idAnime=' + idAnime,
                dataType: 'html',
                success: function () {
                    console.log('Succes set NSFW');
                },
                error: function () {
                    console.log('Not success set NSFW');
                }
            });
        }
    }
    function onCheckboxSpoiler(id) {
        if(id.includes('Spoiler')){
            let idAnime = id.substring(7);
            $.ajax({
                url: '?action=spoiler&ending',
                type: 'POST',
                data: 'spoiler='+1+'&idAnime='+idAnime,
                dataType: 'html',
                success: function () {
                    console.log(this.url);
                    console.log('Succes set Spoiler');
                },
                error: function () {
                    console.log('Not success set Spoiler');
                }
            });
        }
    }

</script>
</body>
</html>