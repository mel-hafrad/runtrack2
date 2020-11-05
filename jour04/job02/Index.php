<?php
$i = 0;



// ne pas oublier isset quand tu possède plusieurs boucle
?>






<!-- FORMULAIRE -->
        <form action="index.php" method="get">
            <label for="argument">argument</label>
            <input type="text" id="argument" name="argument"><br><br>

            <label for="argument2">argument2</label>
            <input type="text" id="argument2" name="argument2"><br><br>

            <input type="submit" value="Submit">
        </form>     
<!-- END FORMULAIRE -->



<!-- TABLEAU -->
    <table>
        <tr>
            <th>Argument</th>
            <th>valeur</th>
        </tr>
        <tr>
            <td> <?php foreach ($_GET as $key => $value){ 
                $i++; 
                echo $key;
                echo "<br>";} ?>
            </td>
            <td> <?php foreach ($_GET as $key => $value){ 
                $i++; 
                echo $value;
                echo "<br>";} ?> 
            </td>
        </tr>
    </table>    
<!-- TABLEAU -->