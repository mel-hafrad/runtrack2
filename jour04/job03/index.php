<?php

$counter = 0;

if (!empty($_POST))
{
    foreach ($_POST as $element => $values)
        {
        $counter++;
        }
echo 'Ce formulaire contient ' . $counter . ' argument(s) POST.' ;
}
?>





<html>

<body>

<form method="post" action="index.php">


    <label for= "vorname">PRENOM</label> 
    <input type="text" name="vorname" id="ligne1"><br />
    
    <label for= "name">NOM</label> 
    <input type="text" name="name" id="ligne2"><br />
 
   <label for= "password">PASSWORD</label> 
   <input type="password" name="password" id="ligne3"><br />
  
     <input type="submit" name="submit" value="submit"><br />

</form>

</body>

</html>

   