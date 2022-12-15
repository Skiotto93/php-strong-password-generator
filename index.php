<?php 
    $pass_leng = $_GET["password_length"];
    
    function password_random($pass_leng) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!£%@#';
        $password = '';
        for ($i = 0; $i < $pass_leng; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1 )];
        }
        return $password;
    }
    echo password_random($pass_leng);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Generator</title>
    </head>
    <body>
        <!-- <form action="" method="GET">
            <input type="number" placeholder="Inserisci num lunghezza password" required>
            <button type="submit">Invia</button>
        </form> -->
    </body>
</html>