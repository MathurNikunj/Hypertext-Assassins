<?php
    extract($_REQUEST);
    $file=fopen("data.txt","a");

    fwrite($file,"name :");
    fwrite($file, $name ."\n");
    fwrite($file,"phone :");
    fwrite($file, $phone ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"desc :");
    fwrite($file, $desc ."\n");
    fclose($file);
    header("location: contact.html");
 ?>
