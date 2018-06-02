<?php


// get the q parameter from URL
$name = $_REQUEST["name"];

$nameErr = "";

if ($name !== "") {

    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
        
    }
    
}

// Output "no suggestion" if no hint was found or output correct values 
echo $nameErr === "" ? " " : $nameErr;
?>