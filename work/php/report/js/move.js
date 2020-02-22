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

    //Object used to handle my image.
    var moveableImageProps = {
        created : false,
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
        console.log('Left footer..')

        createdImage.style.opacity = 0;
        footer.appendChild(createdImage);

    });
    
    //Create image once, returns created object if already created.
    function createImage(){
        if (moveableImageProps.created){
            createdImage.style.opacity = 1;
            return createdImage;
        }
        
        createdImage = document.createElement("img");
        createdImage.width = 30;
        createdImage.height = 30;
        createdImage.src = moveableImageProps.src;
        createdImage.style.opacity = 1;
        createdImage.style.position = 'absolute';
        moveableImageProps.created = true;

        return createdImage;

    }

    //Moves the image to the left or to the right depending on the current value
    //of the objects flag.
    function moveImage(){
        if (moveableImageProps.positionFlag){
            moveableImageProps.position += 5;
            createdImage.style.left = moveableImageProps.position + "px";

            if (moveableImageProps.position > 240){
                moveableImageProps.positionFlag = false;
            }

            footer.appendChild(createdImage);
        } else{
            moveableImageProps.position -= 5;
            createdImage.style.left = moveableImageProps.position + "px";

            if (moveableImageProps.position == 0){
                moveableImageProps.positionFlag = true;
            }

            footer.appendChild(createdImage);
        }
    }

}());
