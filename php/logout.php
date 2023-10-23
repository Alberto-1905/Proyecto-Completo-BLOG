<?php
session_start();
$_SESSION["usrIdentificado"] = false;
    session_destroy();

    if(headers_sent()){
        echo "<script> window.location.href='/pelis.html';<script>";
    }else{
        header("Location: /pelis.html");
    
    }
?>