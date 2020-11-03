<?php 

$n = 0;
while ($n < 100)
{   
        $n++; 




        if(!($n%5)&&(!($n%3)))
        {
            echo 'FizzBuzz' . "<br>";
            
            
        }


        elseif(!($n%3))
        {
            echo "Fizz".  "<br>";
           
        }

        elseif(!($n%5))
        {
            echo 'Buzz';
            echo "<br>";
        }
        
        else {
            echo $n . '<br>';

        }
        
    }


      

?>