<?php
/* header("Content-type: image/png");
$im = @imagecreate(100, 50)
or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
imagepng($im);
imagedestroy($im); */
/* echo '你是我的小苹果'; */
session_start();
     $num='';
     for($i=0;$i<4;$i++)
     {
         $r=rand(0,9);
         $num=$num.$r;
          
     }
     $_SESSION['yan']=$num;
header("Content-type:image/png");
$im=@imagecreate(70, 20) or die("Cannot Initialize new GD image stream");
$baerr=imagecolorallocate($im, 11, 31, 121);
$text_color=imagecolorallocate($im, 11, 222, 222);
imagestring($im, 15, 10, 0, $num,$text_color);
imagepng($im);
imagedestroy($im);