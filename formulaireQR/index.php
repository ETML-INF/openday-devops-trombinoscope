<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://use.fontawesome.com/3a2eaf6206.js"></script>
    <link rel="stylesheet" href="resources/css/style.css">
</head>

<body>
    <h1>Portes ouvertes 2023<br><p class="title">Conception d'un site</p></h1>
    <br>
    <p class="intro">Vous êtes entrain de visiter le poste de conception de site internet ?<br>Le code QR vous a alors
        redirigé au bon
        endroit !</p>
    <br>

    <form action="sendMail.php" method="POST">

        <label class="selectimg" for="inputTag">
            <p>Choisissez une image</p>
            <i class="fa fa-2x fa-camera" style="color: #fbfbfb;"></i>
            <input id="inputTag" type="file" />
            <span id="imageName"></span>
        </label>

        <input type="submit" value="ENVOYER">

    </form>


    <p class="fin">Afin de finaliser ce poste, veuillez sélectionner une image de vous ou vous représentant afin que
        cette dernière
        soit publiée sur le site que vous avez vu précédemment. </p>
</body>

</html>