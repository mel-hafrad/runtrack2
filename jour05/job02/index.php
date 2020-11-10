<?php 
$a= true;
$b= false;

function bonjour($jour)
{  
    if ($jour == true){

    echo "Bonjour" . "<br>". "<br>";
    }

    else{
        echo "Bonsoir". "<br>";
        }
}


bonjour($a);
bonjour($b);

