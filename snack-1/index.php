<?php

    echo "<pre>";
    $matches = [
        [
            'teams' => 'Inter - Juventus',
            'results' => '2 - 3'
        ],
        [
            'teams' => 'Inter - Milan',
            'results' => '2 - 2'
        ],
        [
            'teams' => 'Lazio - Roma',
            'results' => '1 - 3'
        ],
        [
            'teams' => 'Atalanta - Fiorentina',
            'results' => '0 - 0'
        ],
        [
            'teams' => 'Sassuolo - Juventus',
            'results' => '1 - 0'
        ],
        [
            'teams' => 'Napoli - Juventus',
            'results' => '0 - 1'
        ],
        [
            'teams' => 'Inter - Roma',
            'results' => '3 - 0'
        ],
        [
            'teams' => 'Udinese - Sampdoria',
            'results' => '1 - 0'
        ],
        [
            'teams' => 'Verona - Monza',
            'results' => '1 - 2'
        ]
    ]

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            <ul>
                <?php foreach($matches as $match) { ?>
                    <li>
                        <?php echo $match['teams']." - ".$match['results']; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>