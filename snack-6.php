
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php">Index Page</a>
    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

        $keys = array_keys($db);

        for ($i = 0; $i<count($db); $i++){
            $key = $keys[$i];
            if ($key == 'teachers'){

                ?>
                <div class="block teacher">
                    <?php
                    echo "{$db[$key][$i]['name']}{$db[$key][$i]['lastname']}"
                    ?>
                </div>
            <?php
            }elseif ($key == 'pm'){
                ?>
                <div class="block pm">
                    <?php
                    echo "{$db[$key][$i]['name']}{$db[$key][$i]['lastname']}"
                    ?>
                </div>
            <?php
            }
        }
        ?>
    <style>
        .block{
            max-width:300px;
        }
        .teacher{
            background-color: green;
        }
        .pm{
            background-color: red;
        }
    </style>
</body>
</html>
