/**
 * A script that is used to hide and view the flags.
 * A transition is performed both when the flag is to be showed
 * and when the flag is to be hidden.
 * isShown is used so that you have to click the flag to hide it
 * before you can view another flag.
 */

(function () {
    "use strict";

    var flag = {
        isShown : false,
        flagContainer : document.getElementById("flagContainer"),
        flagVertical : document.getElementById("flagVertical"),
        flagHorizontal : document.getElementById("flagHorizontal"),
    };

    let swedenLink = document.getElementById("sweden");
    let denmarkLink = document.getElementById("denmark");
    let finlandLink = document.getElementById("finland");

    flag.flagContainer.addEventListener("click", hideFlag);

    swedenLink.addEventListener("click", createSweden);
    denmarkLink.addEventListener("click", createDenmark);
    finlandLink.addEventListener("click", createFinland);

    function createSweden(){
        if (!flag.isShown){
            flag.flagContainer.style.background = "blue";
            flag.flagHorizontal.style.background = "yellow";
            flag.flagVertical.style.background = "yellow";
            showFlag();    
        }
    };
    
    function createDenmark(){
        if (!flag.isShown){
            flag.flagContainer.style.background = "red";
            flag.flagHorizontal.style.background = "white";
            flag.flagVertical.style.background = "white";
            showFlag();
        }
    };
    
    function createFinland(){
        if (!flag.isShown){
            flag.flagContainer.style.background = "white";
            flag.flagHorizontal.style.background = "blue";
            flag.flagVertical.style.background = "blue";
            showFlag();
        }
    };

    function hideFlag(){
        console.log("Transition to hide flag initated..")
        flag.flagContainer.style.opacity = "0";
        flag.flagContainer.style.transition ="opacity 2s ease-out";
        flag.isShown = false;
    };

    function showFlag(){
        console.log("Transition to show flag initated..")
        flag.flagContainer.style.opacity = "1";
        flag.flagContainer.style.transition ="opacity 2s ease-in";
        flag.isShown = true;
    }

}());


