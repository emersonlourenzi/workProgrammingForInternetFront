<?php
    $emailUserLog = $_POST['tEmailLog'];
    $passUserLog = $_POST['tPassLog'];

    $iniciar = curl_init("http://localhost:8080/v1/users");

    $url = "http://localhost:8080/v1/users";
    $users = json_decode(file_get_contents($url));

    foreach ($users as $us) {
        if ($emailUserLog == $us->emailUser) {
            if ($passUserLog == $us->passUser) {
                header("Location: home.php");
            }
            else {
                echo "Senha inválida.";
            }
        }
        else {
            echo "Email inexistente.";
        }
    }
