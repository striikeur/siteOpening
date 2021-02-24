function noteMusiqueFunction(value, id) {

    let idAnime = id.substring(11);
    let musique = document.getElementById(id);
    let video = document.getElementById("NoteVideo" + idAnime);
    let finale = document.getElementById("NoteFinale" + idAnime);

    if(parseFloat(musique.value) < 0){
        musique.value = 0;
    }else if(parseFloat(musique.value) > 7){
        musique.value= 7;
    }
    if(parseFloat(video.value) < 0){
        video.value = 0;
    }else if(parseFloat(video.value) > 3){
        video.value= 3;
    }

    noteTot = parseFloat(musique.value) + parseFloat(video.value);
    finale.innerHTML = "Note Finale : " + noteTot;
    updateDB(parseFloat(musique.value), parseFloat(video.value), noteTot, idAnime);

}

function noteVideoFunction(value, id) {
    let idAnime = id.substring(9);
    let video = document.getElementById(id);
    let musique = document.getElementById( "NoteMusique" + idAnime);
    let finale = document.getElementById("NoteFinale" + idAnime);

    if(parseFloat(musique.value) < 0){
        musique.value = 0;
    }else if(parseFloat(musique.value) > 7){
        musique.value= 7;
    }
    if(parseFloat(video.value) < 0){
        video.value = 0;
    }else if(parseFloat(video.value) > 3){
        video.value= 3;
    }

    noteTot = parseFloat(musique.value) + parseFloat(video.value);
    finale.innerHTML = "Note Finale : " + noteTot;
    updateDB(parseFloat(musique.value), parseFloat(video.value), noteTot, idAnime);
}



function updateDB(noteMus, noteVid, finale, id) {
    $.ajax({
        url: '?action=updateNote&ending',
        type: 'POST',
        data: 'noteMusique=' + noteMus + '&noteVideo=' + noteVid + '&noteFinale=' + finale + '&idAnime=' + id,
        dataType: 'html',
        success: function () {
            console.log('Succes updateNote');
        },
        error: function () {
            console.log('Not success update note');
        }
    });
}


