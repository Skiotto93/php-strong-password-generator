<?php 
    $pass_leng = $_GET["password_length"];
    
    function password_random($pass_leng) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!%@#';
        $password = '';
        for ($i = 0; $i < $pass_leng; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1 )];
        }
        return $password;
    }
    echo password_random($pass_leng);
?>