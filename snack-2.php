<a href="index.php">Index Page</a>

<form action="snack-2.php" method="get">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="age">Age</label>
    <input type="text" name="age" id="age">
    <input type="submit" value="Invia Modulo">
</form>

<?php

    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $charactersInName = strlen($name);
    $ageIsNumber = is_numeric($age);
    $emailContainsAt = strpos($email, '@');
    $emailContainsDot = strpos($email, '.');

    if($charactersInName >3 && $ageIsNumber == true && $emailContainsAt != FALSE && $emailContainsDot != FALSE){
        echo "Accesso Riuscito";
    }
    else{
        echo "Accesso Negato";
    }

    //echo $name . " " . $email . " " . $age;


?>