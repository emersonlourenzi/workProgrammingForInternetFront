<?php
    $id = $_POST['tIdUser'];
    $nameUser = $_POST['tName'];
    $emailUser = $_POST['tEmail'];
    $passUser = $_POST['tPass'];

    $iniciar = curl_init("http://localhost:8080/v1/users/".$id);

    $dados = array(
        'nameUser' => $nameUser,
        'emailUser' => $emailUser,
        'passUser' => $passUser
    );
    $outronome = json_encode($dados);

    curl_setopt($iniciar, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($iniciar, CURLOPT_POSTFIELDS,true);
    curl_setopt($iniciar, CURLOPT_POSTFIELDS, $outronome);
    curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($iniciar, CURLOPT_HTTPHEADER, array("Content-Type: application/json") );

    curl_exec($iniciar);
    curl_close($iniciar);

    header("Location: pageEditUser.php");