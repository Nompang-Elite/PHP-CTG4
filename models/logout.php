<?php
#---------------Function for destroying sessions -----------------------#
function logout(){
    session_start();
    session_destroy();
    header("location:index.php");
}


