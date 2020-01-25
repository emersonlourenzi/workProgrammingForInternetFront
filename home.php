<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Programming Internet II</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="_images/pc.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="_css/style.css">
    <link rel="stylesheet" type="text/css" href="_css/home.css">
    <script src="//code.jivosite.com/widget.js" data-jv-id="dypOdeXGG0" async></script>
</head>

<script language="JavaScript" src="_javascript/funcoes.js"></script>

<body>
    <header id="head">
        <nav id="menu">
            <ul>
                <li onmouseover="chanceImg('_images/img-home.jpg')" onmouseout="chanceImg('_images/img-home.jpg')"><a href="home.php">Home</a> </li>
                <li onmouseover="chanceImg('_images/img-user.png')" onmouseout="chanceImg('_images/img-home.jpg')"><a href="_user/users.php">Usuários</a></li>
                <li onmouseover="chanceImg('_images/img-prod.png')" onmouseout="chanceImg('_images/img-home.jpg')"><a href="_product/products.php">Produtos</a></li>
                <li onmouseover="chanceImg('_images/img-client.jpg')" onmouseout="chanceImg('_images/img-home.jpg')"><a href="_client/clients.php">Clientes</a></li>
            </ul>
        </nav>

        <nav id="aut">
            <ul>
                <li><a target="_blank" href="https://www.linkedin.com/in/emerson-lourenzi/">Emerson Lourenzi</a></li>
            </ul>
        </nav>

        <img id="imgMenu" src="_images/img-home.jpg" width="100"/>

    </header>

    <section class="hero is-info is-small">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    <a href="home.php">Work Programming Internet II</a>
                </p>
                <p class="subtitle">
                    <a href="home.php">Consumo da API Programming Internet (Java/Spring/JSON/MongoDB) com PHP/HTML/CSS</a>
                </p>
            </div>
        </div>
    </section>

    <div class="box cta">

    </div>

    <section class="container">
        <h1>Jogos em destaque</h1>
        <ul id="photos">
            <a target="_blank" href="https://thewitcher.com/pt-br/"><li id="photo01"><span>The Witcher</span></li></a>
            <a target="_blank" href="https://www.thelastofus.playstation.com/"><li id="photo02"><span>The Last of Us</span></li></a>
            <a target="_blank" href="https://www.thelastofus.playstation.com/"><li id="photo03"><span>The Last od Us II</span></li></a>
            <a target="_blank" href="https://www.playstation.com/pt-br/games/shadow-of-the-colossus-ps4/"><li id="photo04"><span>Shadow of the Colossus</span></li></a>
            <a target="_blank" href="https://www.konami.com/wepes/2020/us/pt-br/ps4/"><li id="photo05"><span>PES 20</span></li></a>
            <a target="_blank" href="https://www.ea.com/pt-br/games/fifa/fifa-20"><li id="photo06"><span>FIFA 20</span></li></a>
            <a target="_blank" href="https://www.conanexiles.com/pt/"><li id="photo07"><span>Conan Exiles</span></li></a>
            <a target="_blank" href="https://assassinscreed.ubisoft.com/game/pt-br/home"><li id="photo08"><span>Assassins Creed</span></li></a>
        </ul>

    </section>
</body>
</html>