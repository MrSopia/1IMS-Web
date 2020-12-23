<?php

$Array = str_split($_POST[name]);
 
foreach($Array as $character){
    echo "<h2>" . $character . "</h2>";
}

?>