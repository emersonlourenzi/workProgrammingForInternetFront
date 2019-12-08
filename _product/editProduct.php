<?php
    $id = $_POST['tIdProd'];
    $nameUser = $_POST['tNameProd'];
    $descProd = $_POST['tDescProd'];

    $iniciar = curl_init("http://localhost:8080/v1/products/".$id);

    $dados = array(
        'nameProd' => $nameUser,
        'descriptionProd' => $descProd
    );
    $outronome = json_encode($dados);

    curl_setopt($iniciar, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($iniciar, CURLOPT_POSTFIELDS,true);
    curl_setopt($iniciar, CURLOPT_POSTFIELDS, $outronome);
    curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($iniciar, CURLOPT_HTTPHEADER, array("Content-Type: application/json") );

    curl_exec($iniciar);
    curl_close($iniciar);

    header("Location: pageEditProd.php");