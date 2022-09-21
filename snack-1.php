<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 1</title>
</head>
<body>

    <?php
        $partite[
            [
                'home' => 'Dragons',
                'guest' => 'Minions',
                'homeScore' => 830,
                'guestScore' => 570
            ]
        ]
    ?>

    <a href="index.php">Index Page</a>
    <ul>
    <?php
        for($i=0; $i<count($partite); $i++){
            $match = $partite[$i];
            ?>
            <li>
                <?php
                    echo  "{$match['home']} - {$match['guest']} | {$match['homeScore']} - {$match['guestScore']}";
                ?>
            </li>
            <?php
        }
    ?>
    </ul>
</body>
</html>