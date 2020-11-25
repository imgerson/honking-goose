function playGoose( gooseSoundUrl ) {
    goose = new Audio( gooseSoundUrl );
    goose.play();
}

function checkKey( e ) {
    if ( e.keyCode === 32 ) {
        playGoose( `${honkingGoose.mp3Path}` );
    }
}

document.onkeyup = checkKey;
