<?php
    $anno = date("Y");

    echo "<!DOCTYPE html>
    <html lang=\"it\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Web App didattica sviluppata per il corso di Full Stack MIND\">
        <meta name=\"author\" content=\"Leonardo Pedron\">
        <meta name=\"copyright\" content=\"Copyright 2022 - Pedron Leonardo\">
        
        <title>Biblioteca MIND</title>
    
        <link rel=\"shortcut icon\" href=\"images/site-icon.png\" type=\"image/png\">
        <link rel=\"stylesheet\" href=\"css/style.css\">
    </head>
    <body>
    
        <header id=\"site-header\">
            <nav id=\"main-navigation\">
                <a class=\"navbar-logo\" href=\"index.php\">
                    <img src=\"images/site-icon.png\" width=\"48\" height=\"48\" alt=\"Logo MindTeca\">MT
                </a>
                <ul> 
                    <li><a href=\"index.php\"><i class=\"fa-solid fa-house\"></i> Home</a></li><!-- Ancora interna -->
                    <li><a href=\"autori.php\"><i class=\"fa-solid fa-user\"></i> Autori</a></li><!-- Ancora esterna -->
                    <li><a href=\"categorie.php\"><i class=\"fa-solid fa-tag\"></i> Categorie</a></li>
                    <li><a href=\"titoli.php\"><i class=\"fa-solid fa-pen\"></i> Titoli</a></li>
                    <li><a target=\"_blank\" href=\"https://creativemind.academy/\"><i class=\"fa-solid fa-link\"></i> Mind</a></li>
                    <li><a href=\"login.php\" class=\"active\"><i class=\"fa-solid fa-lock\"></i> Login</a></li>
                </ul>
            </nav>
            <h1><span class=\"color-m\">M</span><span class=\"color-i\">i</span><span class=\"color-n\">n</span><span class=\"color-d\">d</span>Teca</h1> 
        </header>
    
        <main id=\"page-content\">
            <h2 id=\"accedi\" class=\"color-n t-center\">ACCEDI AL TUO ACCOUNT</h2>
            <form id=\"login\" action=\"#\" method=\"post\">
                <label for=\"username\">Username</label><br>
                <input type=\"text\" name=\"username\" id=\"username\" placeholder=\"USERNAME\" autocomplete=\"off\" autofocus required><br>

                <label for=\"password\">Password</label><br>
                <input type=\"password\" name=\"password\" id=\"password\" placeholder=\"PASSWORD\" autocomplete=\"off\" required><br>
                <button class=\"color-n\" type=\"submit\"><i class=\"fa-solid fa-lock\"></i> Accedi</button>
            </form>
        </main>

        <footer class=\"t-center color-white t-bold\">
            Copyright $anno - Pedron Leonardo &copy;
        </footer>
    </body>
    </html>";
?>