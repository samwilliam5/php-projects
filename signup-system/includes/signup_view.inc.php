<?php 
require_once './includes/session.inc.php';

function error_message() {

    if(isset($_SESSION['error_message'])){

        foreach($_SESSION['error_message'] as $values){
           $result = "<p>$values</p>";
        }
        return $result;
    }
    else if($_SESSION['success_message']){
        foreach($_SESSION['error_message'] as $values){
            $result = "<p>$values</p>";
         }
         return $result;
    }
}

