/**
 * A script that is used to move my object.
 */

(function () {
    "use strict";

    var source;

    if(document.title == "Main page of course website"){
        source = 'work/report/img/logo-hkr.jpg';
    }else{
        source = '../report/img/logo-hkr.jpg';
    }

    var createdImage;
    var footer = document.getElementById("pageFooter");
    var moveableImage = {
        width : 30,
        height : 30,
        created : false,
        opacity : 1,
        position : 0,
        positionFlag : true,
        src : source,
    };

    //Show image
    footer.addEventListener("mouseenter", function(){
        console.log('Entered footer..')

        createdImage = createImage();
        footer.appendChild(createdImage);

        createdImage.addEventListener("click", moveImage);

    });

    //Hide image
    footer.addEventListener("mouseleave", function(){
        console.log('Leaved footer..')

        moveableImage.opacity = 0;
        createdImage.style.opacity = moveableImage.opacity;
        footer.appendChild(createdImage);

    });
    
    //Create image once, returns created object if already created.
    function createImage(){
        if (moveableImage.created){
            moveableImage.opacity = 1;
            createdImage.style.opacity = moveableImage.opacity;
            return createdImage;
        }
        
        createdImage = document.createElement("img");
        createdImage.width = moveableImage.width;
        createdImage.height = moveableImage.height;
        createdImage.src = moveableImage.src;
        createdImage.style.opacity = moveableImage.opacity;
        createdImage.style.position = 'absolute';
        moveableImage.created = true;

        return createdImage;

    }

    //Moves the image to the left or to the right depending on the current value
    //of the objects flag.
    function moveImage(){
        console.log("MOVE");
        if (moveableImage.positionFlag){
            moveableImage.position += 5;
            createdImage.style.left = moveableImage.position + "px";

            if (moveableImage.position > 240){
                moveableImage.positionFlag = false;
            }

            footer.appendChild(createdImage);
        } else{
            moveableImage.position -= 5;
            createdImage.style.left = moveableImage.position + "px";

            if (moveableImage.position == 0){
                moveableImage.positionFlag = true;
            }

            footer.appendChild(createdImage);
        }
    }

}());
