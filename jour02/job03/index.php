<?php 


$n = -1;


while ($n < 100){   
        $n= $n+1;

    if (($n >= 0)&&($n <= 20))
    {
        echo " <i>$n</i>";
        echo " <br>";
    }


    if (($n > 20)&&($n<25))
    {
        echo " $n ";
        echo " <br>";
    }



    if (($n >= 25)&&($n<=50))
    {
        echo "<u> $n </u>";
        echo " <br>";

        if($n==41){
            echo 'La Plateforme_<br>';
            $n= $n+1;
        }
    }

    if (($n > 50)&&($n <=100))
    {
        echo "$n";
        echo "<br>";
    }


 }


?>