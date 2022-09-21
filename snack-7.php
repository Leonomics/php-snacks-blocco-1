<a href="index.php">Index Page</a>
<br>
<?php

    $students = [
        'student1' => [
                'name' => 'Michele',
                'lastname' => 'Papagni',
                'votes' => [
                    5,9,6,5,8
                ],
            ],

        'student2' => [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'votes' => [
                5,6, 7,7,8
            ],
        ],

        'student3' =>    [
                'name' => 'Mario',
                'lastname' => 'Rossi',
                'votes' => [
                    7,7,8,6
                ],
            ],
        ];

    foreach($students as $student){
        echo $student . "=>" . $student['name'] . " " . $student['lastname'] . " " . "vote average: " . $average = array_sum($student['votes'])/count($student['votes']) . "<br>";

    }

