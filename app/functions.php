<?php
function Filename() {
    $filename = basename($_SERVER['PHP_SELF']);
    
    $title = pathinfo($filename, PATHINFO_FILENAME);
    
    $title = ucfirst($title);
    
    return $title;
}

   function redirect(string $url):void{
        header('Location: '.$url);
        exit(); 
    }
?>