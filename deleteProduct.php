<?php
    $id = $_POST['tIdProd'];

    $iniciar = curl_init("http://localhost:8080/v1/products/".$id);

    curl_setopt($iniciar, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($iniciar, CURLOPT_HTTPHEADER, array("Content-Type: application/json") );

    curl_exec($iniciar);
    curl_close($iniciar);

    header("Location: pageDeleteProd.php");
