<?php
if ( isset($_POST['sesion.php']) ) 
    $url = sesion.php; 

if ( isset($_POST['WTF']) ) 
    $url = WTF.php; 

if ( isset($_POST['STOP']) ) 
    $url = STOP.php; 

header("Location: $url");
exit;