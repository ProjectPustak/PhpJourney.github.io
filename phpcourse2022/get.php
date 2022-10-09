<?php

//Get Super Globals:-

if(isset($_GET['lang']) AND isset($_GET['company'])){
        
    $get = $_GET['lang'];
    $company =$_GET['company'];

    echo "My Favourite Language is: $get and the Company is: $company";
}


?>