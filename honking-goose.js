function playGoose( gooseSoundUrl ) {
    goose = new Audio( gooseSoundUrl );
    goose.play();
}

function checkKey( e ) {
    if ( e.keyCode === 32 ) {
        playGoose( '/wp-content/plugins/honking-goose/goose.mp3' );
    }
}

document.onkeyup = checkKey;
