<a href="index.php">Index Page</a>

<?php
    $numbers = [];
    while (count($numbers)<15){
        $number = rand(1, 99);
        if(!in_array($number, $numbers)) $numbers[] = $number;
    }
    var_dump($numbers);

?>