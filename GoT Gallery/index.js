var i = 0;

function ChangeImage()
{

    var img = document.getElementById("img");
    img.src = images[i];

    setTimeout(ChangeImage, 2000);
    if (i >= images.length - 1)
    {
        i = 0;
    }
    else{
        i++;
    }
}


var images = [  "./images/1.png", 
                "./images/2.png", 
                "./images/3.png", 
                "./images/4.png", 
                "./images/5.png", 
                "./images/6.png", 
                "./images/7.png"
            ];

ChangeImage();