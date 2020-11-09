<?php

// Bed desing

Class FileType{
    function getDisplay($file,$fileType){
        if('mp4'==$fileType){
            //display Video
        }elseif('mp3'==$fileType){
            // display Audio
        }elseif('image'==$fileType){
            // display picture
        }else{

        }
    }

}


// Open Close Principal
Class FileDisplay{
    function display(fileInterFace $file){
        $file->display();
    }
}
interface fileInterFace{
    function display();
}


Class ImageFile implements fileInterFace{
    function display()
    {
        // take nessary steps to display image
    }
}
Class VideoFile implements fileInterFace{
    function display()
    {
        // take nessary steps to display Video
    }
}

Class Audio implements fileInterFace{
    function display()
    {
        // take nessary steps to display Audio
    }
}

$audio = New Audio('abcd.mp3');
$image = New ImageFile('abcd.jpeg');
$video = New VideoFile('abcd.mp4');

$fd = New FileDisplay();
$fd->display($image);
$fd->display($video);
$fd->display($audio);