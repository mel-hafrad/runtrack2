<?php 


//$argument = $_POST['argument'];
//$argument2 = $_POST['argument2'];

// echo $argument  . "<br>" . $argument2; 



$i = 0;              //initialiser la variable en dehors de la boucle pour un Foreach ;




//pour chaque élément de Tableau "$_Get attribu une variable "$key" au clés "$value" au valeur de mon tableau. 
# $_Get est un tableau généré automatiquement qui contient les "$values" des "$keys" quand on le submit ;
foreach ($_POST as $key => $value){
    $i++; 
}
echo "<br>";
echo $i;

// Code php 

?>


<form action="index.php" method="POST">
    <label for="argument">argument</label>
    <input type="text" id="argument" name="argument"> <br><br>

    <label for="argument2">argument2</label>
    <input type="text" id="argument2" name="argument2"> <br><br>

    <input type="submit" value="submit">
</form>
