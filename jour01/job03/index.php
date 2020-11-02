

<style type="text/css">
		h1{
			text-align: center;
		}
		table{
			margin-top: 15px;
			display: flex;
			justify-content: center;
            padding-top:10%;
		}
		td{
			border:2px solid black;
            color:green;
			
			padding: 10px;
		}
		th{
			color: red;
			border:1px solid black;
		}

		
	</style>
    

        <?php
            $boo = true; // assigne la valeur TRUE à $boo Booléen
            $a = 1234; // un nombre décimal Entiers
            $carac = "ouais"; // une chaine de caractères
            $b = 1.234;     // virgule flotante 
            $tableau = ["type","nom","valeur"];

            ?>



        <table>
            <tr>
                <th><?php echo $tableau[0]; ?> </th>
                <th><?php echo $tableau[1]; ?></th>
                <th><?php echo $tableau[2]; ?></th>
            </tr>
            <tr>
                <td><?php echo gettype ($boo);?></td>        <!--Connaitre le type de fonction-->
                <td><?php echo '$boo';?></td>               <!--Afficher le nom  donné de la fonction-->
                <td><?php echo $boo;?></td>                 <!--Afficher le Value-->
            </tr>
            <tr>
                <td><?php echo gettype ($a);?></td>
                <td><?php echo '$a';?></td>
                <td><?php echo $a;?></td>
            </tr>
            <tr>
                <td><?php echo gettype ($carac);?></td>
                <td><?php echo '$carac';?></td>
                <td><?php echo $carac;?></td>
            </tr>
            <tr>
                <td><?php echo gettype ($b);?></td>
                <td><?php echo '$b';?></td>
                <td><?php echo $b;?></td>
            </tr>
        </table>


