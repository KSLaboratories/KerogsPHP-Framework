<?php

chdir("../");
require_once('config.php');
require_once('backend/core-labs.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labs</title>
</head>
<style>
    * {
        background-color: #1C1C1E;
        font-family: sans-serif;
    }

    h1,
    h2 {
        color: #D4A373;
    }

    h1.p span {
        color: #D4A373;
    }

    table {
        box-shadow: 0 0 10px rgb(0, 0, 0) !important;
    }

    tr * {
        color: #fff;
        background-color: #333 !important;
    }

    tr.h td {
        border: 1px solid #D4A373 !important;
        padding: 20px;
    }

    td {
        border: 1px solid #888 !important;
    }

    td.e {
        background-color: #444 !important;
    }

    tr:hover * {
        background-color: #1C1C1E !important;
    }

    .logo{
        position: fixed;
        bottom: -80px;
        right: -80px;
        opacity: .1;
        width: 350px;
    }

    .logo img{
        width: 100%;
    }
</style>

<body>

    <?= phpinfo() ?>

    <div class="logo">
        <img src="src/img/logo.png" alt="">
    </div>

</body>
<script>
    const elements = document.querySelectorAll('h1.p');
    elements.forEach(element => {
        element.innerHTML += '<br><span>Drangon Knowledge</span>';
    });
</script>

</html>