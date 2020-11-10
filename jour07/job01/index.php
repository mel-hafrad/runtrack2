
<?php

$file =fopen('data.text', 'c+');
$nbsvisites = intval(fgets($file));


$count++;
fseek($file , 0);
fputs($file , $count);

fclose($file);

 echo $nbsvisites;

?>
