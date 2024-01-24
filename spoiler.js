document.getElementById("showSpoiler").onclick = function(){
let textSpoiler = document.getElementsByClassName('spoiler');
    for (let i = 0; i < textSpoiler.length; i++) {
    let elementSpoiler = textSpoiler[i];
    elementSpoiler.classList.remove("spoiler");
    }
}