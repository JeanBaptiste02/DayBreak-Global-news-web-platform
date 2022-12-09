
window.onload = function() {
    //----------------------------------------------------------------------------
    //--API SpeechSynthesis
    let button = document.getElementById("js-button-tts");
    let buttonStop = document.getElementById("js-button-stop-tts");
    let content = document.getElementById("js-content-tts");
       
    button.addEventListener("click", function(){
        let text = content.textContent;
        let speech = new SpeechSynthesisUtterance(text);
        speechSynthesis.speak(speech);
    });

    buttonStop.addEventListener("click", function(){
        speechSynthesis.cancel();
    });

    //----------------------------------------------------------------------------
    //--boutton "Charger Plus"
    var card = document.querySelectorAll('.card2');
    var currentcard = 3;
    const boxes = document.getElementsByClassName('btnLoad');

    for (const box of boxes) {
        box.addEventListener('click', function onClick() {
            for(var i = currentcard; i<currentcard+3; i++) {
                if(card[i]) {
                    card[i].style.display = 'block';
                }
            }
            currentcard += 3;
            if(currentcard >= card.length) {
                event.target.style.display = 'none';
            }
        });
    }

};