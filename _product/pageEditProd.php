<?php
$url = "http://localhost:8080/v1/products";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$product = json_decode(curl_exec($ch));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Programming Internet II</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../_images/pc.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="../_css/style.css">
    <link rel="stylesheet" type="text/css" href="../_css/products.css"/>
    <script src="//code.jivosite.com/widget.js" data-jv-id="dypOdeXGG0" async></script>
</head>

<script language="JavaScript" src="../_javascript/funcoes.js"></script>

<body>
<header id="head">
    <nav id="menu">
        <ul>
            <li onmouseover="chanceImg('../_images/img-home.jpg')" onmouseout="chanceImg('../_images/img-prod.png')"><a href="../index.php">Home</a> </li>
            <li onmouseover="chanceImg('../_images/img-user.png')" onmouseout="chanceImg('../_images/img-prod.png')"><a href="../_user/users.php">Usuários</a></li>
            <li onmouseover="chanceImg('../_images/img-prod.png')" onmouseout="chanceImg('../_images/img-prod.png')"><a href="products.php">Produtos</a></li>
        </ul>
    </nav>

    <nav id="aut">
        <ul>
            <li><a target="_blank" href="https://www.linkedin.com/in/emerson-lourenzi/">Emerson Lourenzi</a></li>
        </ul>
    </nav>

    <img id="imgMenu" src="../_images/img-prod.png" width="100"/>

</header>

<section class="hero is-info is-small">
    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title">
                <a href="../index.php">Work Programming Internet II</a>
            </p>
            <p class="subtitle">
                <a href="../index.php">Consumo da API Programming Internet (Java/Spring/JSON/MongoDB) com PHP/HTML/CSS</a>
            </p>
        </div>
    </div>
</section>

<div class="box cta">

</div>

<section class="container">
    <form method="post" id="formProd" action="editProduct.php">
        <fieldset id="fProd">
            <legend>Editar produto</legend>
            <p><label for="cIdProd">Id Usuário:</label><input required type="text" name="tIdProd" id="cIdProd" size="120" maxlength="70" placeholder="Cole ou digite o Id do usuário aqui"/></p>
            <p><label for="cNameProd">Nome Produto:</label><input required type="text" name="tNameProd" id="cNameProd" size="115" maxlength="15" placeholder="Digite o nome do produto"/></p>
            <p><label for="cDescProd">Descrição:</label><textarea required name="tDescProd" id="cDescProd" cols="117" rows="5" maxlength="40" placeholder="Descreva informações do produto" ></textarea></p>
            <input type="image" name="tBtnSave" id="cBtnSave" src="../_images/btn-save.png" height="30px"/>
        </fieldset>
    </form>

    <form>
        <input type="image" name="tBtnRet2" id="cBtnRet2" src="../_images/btn-return.png" height="40px" formaction="products.php"/>
    </form>

    <table id="tableProd">
        <caption><h1>Produtos</h1></caption>
        <?php
        foreach ($product as $prod) {
            echo "<tr>
                              <td class='idProd'>$prod->id</td>
                              <td class='nameProd'>$prod->nameProd</td> 
                              <td class='descProd'>$prod->descriptionProd</td>
                          </tr>";
        }
        ?>
    </table>
</section>

</body>
</html>