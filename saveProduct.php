<?php
    $nameProd = $_POST['tName'];
    $descProd = $_POST['tDesc'];

    $iniciar = curl_init("http://localhost:8080/v1/products");

    $dados = array(
        'nameProd' => $nameProd,
        'descriptionProd' => $descProd
    );
    $outronomeProd = json_encode($dados);

    curl_setopt($iniciar, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($iniciar, CURLOPT_POSTFIELDS,true);
    curl_setopt($iniciar, CURLOPT_POSTFIELDS, $outronomeProd);
    curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($iniciar, CURLOPT_HTTPHEADER, array("Content-Type: application/json") );


    curl_exec($iniciar);
    curl_close($iniciar);

    header("Location: products.php");