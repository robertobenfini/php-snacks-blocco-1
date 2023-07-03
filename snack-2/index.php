<?php

    if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];

        if(strlen($name) > 3 && strpos($email, '.') !== false && strpos($email, '@') !== false && is_numeric($age)){
            echo "Accesso riuscito";
        }

        else{
            echo "Accesso negato";
        }
    }

    else{
        echo "";
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
        <form action="" method="get">
            <input type="name" placeholder="Name" name="name" required>
            <input type="email" placeholder="Email" name="email" required>
            <input type="text" placeholder="Age" name="age" required>
            <input type="submit" value="Invia">
        </form>
    </body>
</html>