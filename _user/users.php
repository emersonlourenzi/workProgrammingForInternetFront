<?php
    $url = "http://localhost:8080/v1/users";
    $users = json_decode(file_get_contents($url));
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Programming Internet II</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="../_images/pc.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="../_css/style.css"/>
    <link rel="stylesheet" type="text/css" href="../_css/users.css"/>
    <script src="//code.jivosite.com/widget.js" data-jv-id="dypOdeXGG0" async></script>
</head>

<script language="JavaScript" src="../_javascript/funcoes.js"></script>

<body>
    <header id="head">
        <nav id="menu">
            <ul>
                <li onmouseover="chanceImg('../_images/img-home.jpg')" onmouseout="chanceImg('../_images/img-user.png')"><a href="../home.php">Home</a> </li>
                <li onmouseover="chanceImg('../_images/img-user.png')" onmouseout="chanceImg('../_images/img-user.png')"><a href="users.php">Usuários</a></li>
                <li onmouseover="chanceImg('../_images/img-prod.png')" onmouseout="chanceImg('../_images/img-user.png')"><a href="../_product/products.php">Produtos</a></li>
                <li onmouseover="chanceImg('../_images/img-client.jpg')" onmouseout="chanceImg('../_images/img-user.png')"><a href="../_client/clients.php">Clientes</a></li>
            </ul>
        </nav>

        <nav id="aut">
            <ul>
                <li><a target="_blank" href="https://www.linkedin.com/in/emerson-lourenzi/">Emerson Lourenzi</a></li>
            </ul>
        </nav>

        <img id="imgMenu" src="../_images/img-user.png" width="100"/>

    </header>

    <section class="hero is-info is-small">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    <a href="../home.php">Work Programming Internet II</a>
                </p>
                <p class="subtitle">
                    <a href="../home.php">Consumo da API Programming Internet (Java/Spring/JSON/MongoDB) com PHP/HTML/CSS</a>
                </p>
            </div>
        </div>
    </section>

    <div class="box cta">

    </div>

    <section class="container">
        <form method="post" id="formUser" action="saveUser.php">
            <fieldset id="fUser">
                <legend>Adicionar novo usuário</legend>
                <p><label for="cName">Nome:</label><input required type="text" name="tName" id="cName" size="115" maxlength="70" placeholder="Digite seu nome"/></p>
                <p><label for="cEmail">Email: </label><input required type="email" name="tEmail" id="cEmail" size="115" maxlength="95" placeholder="Digite um email válido"/></p>
                <p><label for="cPass">Senha:</label><input required type="password" name="tPass" id="cPass" size="115" maxlength="20" placeholder="Digite uma senha segura de até 20 caracteres"/></p>
                <input type="image" name="tBtnSave" id="cBtnSave" src="../_images/btn-save.png" height="30px"/>
            </fieldset>
        </form>

        <form>
            <input type="image" name="tBtnDelete" id="btnDelete" src="../_images/delete-user.jpg" height="40px"
                   formaction="pageDeleteUser.php"/>
            <input type="image" name="tBtnEdit" id="btnEdit" src="../_images/edit-user.jpg" height="40px"
                   formaction="pageEditUser.php"/>
        </form>

        <table id="tableProd">
            <caption><h1>Usuários</h1></caption>
            <?php
            foreach ($users as $us) {
                echo "<tr id='$us->id'>
                          <td class='idProd' id='$us->id'>$us->id</td>
                          <td class='nameProd'>$us->nameUser</td> 
                          <td class='descProd'>$us->emailUser</td>
                      </tr>";
            }
            ?>
        </table>
        
    </section>
</body>
</html>