<?php
    $nameClient = $_POST['tNameClient'];
    $foneClient = $_POST['tFone'];
    $addressClient = $_POST['tAddress'];

    $iniciar = curl_init("http://localhost:8080/v1/clients");

    $dados = array(
        'nameClient' => $nameClient,
        'foneClient' => $foneClient,
        'addressClient' => $addressClient
    );
    $outronome = json_encode($dados);

    curl_setopt($iniciar, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($iniciar, CURLOPT_POSTFIELDS,true);
    curl_setopt($iniciar, CURLOPT_POSTFIELDS, $outronome);
    curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($iniciar, CURLOPT_HTTPHEADER, array("Content-Type: application/json") );


    curl_exec($iniciar);
    curl_close($iniciar);

    header("Location: clients.php");