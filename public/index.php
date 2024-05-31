<?php

require_once('../config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../inc/head.php' ?>
    <title>Public</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>

    <body>
        <div id="page">
            <div id="header">
                <div class="logo">
                    <img src="/src/img/logo.png" alt="Logo">
                </div>
                <div class="title">
                    <h1>Dragon Knowledge</h1>
                    <p>Version <?= $dkf_version ?> - <?= $dkf_urlHTTP . $dkf_urlHOST ?></p>
                </div>
            </div>
            <div id="content">
                <h2>Well done, successful installation!</h2>
                <p>
                    Here is the default homepage used to test the correct operation of the server after installing the Dragon Knowledge Framework. If you can read this page, it means the framework installed on this site is working correctly. You should <b>replace this file</b> (located at <tt>/public/index.php</tt>) before continuing to use your site.
                </p>
                <p>
                    If you are a regular user of this website and are unsure about its current status, it likely means the site is temporarily unavailable due to maintenance. If the issue persists, please contact the site administrator for further assistance.
                </p>
                <h3>Configuration Overview</h3>
                <p>
                    The default configuration of the Dragon Knowledge Framework differs from the upstream configuration, and is organized into several files optimized for interaction with the framework's tools. The configuration system is fully documented in the README file. For complete documentation, please refer to this file. Documentation for the web server itself can be accessed by referring to the relevant manuals if the necessary packages were installed on this server.
                </p>
                <p>
                    The configuration layout for a Dragon Knowledge Framework installation on Ubuntu systems is as follows:
                </p>
                <pre>
📦Dragon-Knowledge-Framework
 ┣ 📂.ksinf
 ┃ ┗ 📂.ignore
 ┣ 📂api
 ┣ 📂backend
 ┃ ┣ 📂data
 ┃ ┣ 📂func
 ┃ ┣ 📜core.php
 ┃ ┗ 📜serverStatus.json
 ┣ 📂inc
 ┣ 📂public
 ┃ ┣ 📂error
 ┃ ┣ 📂src
 ┃ ┃ ┣ 📂css
 ┃ ┃ ┣ 📂img
 ┃ ┃ ┗ 📂scss
 ┃ ┣ 📜.htaccess
 ┃ ┣ 📜index.php
 ┃ ┗ 📜package.json
 ┣ 📂test
 ┃ ┣ 📂src
 ┃ ┗ 📜index.php
 ┣ 📜.gitignore
 ┣ 📜.htaccess
 ┣ 📜composer.json
 ┣ 📜config.php
 ┣ 📜LICENSE
 ┣ 📜README.md
 ┗ 📜robots.txt
</pre>
                <h3>Initialisaition</h3>
                <p>
                    You'll need <tt>NodeJS</tt> and <tt>Composer</tt> installed.
                </p>
                <p>1. Clone the repository<b></b></p>
                <p>
                <pre>git clone https://github.com/KSInfinite/Dragon-Knowledge-Framework.git</pre>
                </p>
                <p>2. <b>Go in the directory</b><br>
                <pre>cd Dragon-Knowledge-Framework</pre>
                </p>
                <p>3. <b>Install composer package</b><br>
                <pre>composer install</pre>
                </p>
                <p>4. <b>Go in the public directory</b><br>
                <pre>cd ./public</pre>
                </p>
                <p>5. <b>Install npm package</b><br>
                <pre>npm install</pre>
                </p>
                <h3>Document Roots</h3>
                <p>
                    The default folder for users is <tt>/public/</tt>. Everything else will be in the root folder.
                </p>
                <h3>Reporting Problems</h3>
                <p>
                    Don't forget that this framework is still in the testing phase. <b>There may be security holes or bugs</b>. In this case, please make an <a href="https://github.com/KSInfinite/Dragon-Knowledge-Framework/issues">issue</a>. Or help us. All this can be done from our <a href="https://github.com/KSInfinite/Dragon-Knowledge-Framework">github page</a>.
                </p>
                <p>
                    If you encounter problems with other packages, please report them to their owners.
                </p>
            </div>
        </div>
    </body>

</body>

</html>