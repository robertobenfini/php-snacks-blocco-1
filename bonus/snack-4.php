<?php

    $newArray = [];

    while (count($newArray) < 15) {
        $number = rand(1, 100);
        if (!in_array($number, $newArray)) {
            $newArray[] = $number;
        }
    }

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <?php foreach($newArray as $number) { ?>
                    <li>
                        <?php echo $number;
                         ?>
                    </li>
            <?php } ?>
        </ul>
    </body>
</html>