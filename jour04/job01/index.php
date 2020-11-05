

<?php 


$argument = $_GET['argument'];
$argument2 = $_GET['argument2'];

echo $argument  . "<br>" . $argument2; 

$i = 0;

foreach ($_GET as $key => $value){
    $i++; 
}
echo "<br>";
echo $i;



?>




<form action="index.php" method="GET">
    <label for="argument">argument</label>
    <input type="text" id="argument" name="argument"> <br><br>

    <label for="argument2">argument2</label>
    <input type="text" id="argument2" name="argument2"> <br><br>

    <input type="submit" value="submit">
</form>




