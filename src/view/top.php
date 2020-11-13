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

<script>
    let noteFinale = document.getElementsByName("noteTotale");
    let noteMusique = document.getElementsByName("noteMusique");
    let noteVideo = document.getElementsByName("noteVideo");
    let anime = document.getElementsByName("animeName");

    function noteMusiqueFunction(value, id) { // en fait go faire un getElementById;
        var x;
        noteMusique.forEach(function(noteMus, index) {
            if(noteMus.id === id) {
                mus = parseFloat(noteMus.value);
                video = parseFloat(noteVideo[index].value);

                if(mus < 0){
                    noteMus.value = 0;
                    mus = 0;
                }else if(mus > 5){
                    noteMus.value= 5;
                    mus = 5;
                }
                if(video < 0){
                    noteVideo[index].value = 0;
                    video = 0;
                }else if(video > 5){
                    noteVideo[index].value= 5;
                    video = 5;
                }

                finale = mus + video;
                noteFinale[index].innerHTML = "Note Finale : " + finale;
                updateDB(mus, video, finale, id);
            }
        });

    }

    function noteVideoFunction(value, id) {
        var y;

        noteVideo.forEach(function(noteFin, index) {

            if(noteFin.id === id) {
                mus = parseFloat(noteMusique[index].value);
                video = parseFloat(noteFin.value);

                if(mus < 0){
                    noteMusique[index].value = 0;
                    mus = 0;
                }else if(mus > 5){
                    noteMusique[index].value= 5;
                    mus = 5;
                }
                if(video < 0){
                    noteFin.value = 0;
                    video = 0;
                }else if(video > 5){
                    noteFin.value= 5;
                    video = 5;
                }

                finale = mus + video;
                noteFinale[index].innerHTML = "Note Finale : " + finale;
                updateDB(mus, video, finale, id);
            }
        });
    }

    function updateDB(noteMus, noteVid, finale, id) {
        $.ajax({
            url: '?action=updateNote',
            type: 'POST',
            data: 'noteMusique=' + noteMus + '&noteVideo=' + noteVid + '&noteFinale=' + finale + '&idAnime=' + id,
            dataType: 'html',
            success: function () {
                console.log('isWorking');
            },
            error: function () {
                console.log('is not working');
            }
        });
    }



</script>
</body>
</html>