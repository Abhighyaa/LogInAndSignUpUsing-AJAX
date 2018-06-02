<?php

require 'connectdb.php';
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "neha";
$a[] = "neha1";
$a[] = "neha23";



// get the q parameter from URL
$uname = $_REQUEST["uname"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($uname !== "") {
    //$q = strtolower($q);

    $len=strlen($uname);
    foreach($a as $name) {

        $sql = "SELECT * from users where uname!='$a'";
        $result = $conn->query($sql);


        if (stristr($uname, substr($name, 0, $len))&&($result->num_rows > 0)) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>