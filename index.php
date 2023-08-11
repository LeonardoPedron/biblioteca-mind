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
        <meta name=\"copyright\" content=\"Copyright $anno - Pedron Leonardo\">
        
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
                    <li><a href=\"index.php\" class=\"active\"><i class=\"fa-solid fa-house\"></i> Home</a></li><!-- Ancora interna -->
                    <li><a href=\"autori.php\"><i class=\"fa-solid fa-user\"></i> Autori</a></li><!-- Ancora esterna -->
                    <li><a href=\"#\"><i class=\"fa-solid fa-tag\"></i> Categorie</a></li>
                    <li><a href=\"#\"><i class=\"fa-solid fa-pen\"></i> Titoli</a></li>
                    <li><a target=\"_blank\" href=\"https://creativemind.academy/\"><i class=\"fa-solid fa-link\"></i> Mind</a></li>
                    <li><a href=\"login.php\"><i class=\"fa-solid fa-lock\"></i> Login</a></li>
                </ul>
            </nav>
            <h1><span class=\"color-m\">M</span><span class=\"color-i\">i</span><span class=\"color-n\">n</span><span class=\"color-d\">d</span>Teca</h1> 
        </header>
    
        <main id=\"page-content\">
            <p>Benvenuti nella biblioteca di MIND. Potete effettuare ricerche per <strong>AUTORE</strong> e per <em>CATEGORIA</em></p> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, in quo dicta nihil totam ducimus nemo laudantium beatae explicabo esse nulla nesciunt possimus odit distinctio fugit quaerat, qui quibusdam velit?
            At reiciendis nihil inventore qui? Rerum perferendis iure ea vel sit autem tempore quasi? Repudiandae harum accusamus soluta quo aliquam ad, perferendis nulla! Deserunt ipsa, dignissimos voluptates adipisci maxime id.</p>
    
            <section id=\"recents\">
    
                <header>
                    <h2 class=\"color-n\">Ultime novità</h2>
                </header>
                <div class=\"book-list\">
                    <article class=\"book\">
                        <div class=\"front-in\">
                            <div id=\"page_one\"></div>
                        </div>
                        <div class=\"front\">
                            <img src=\"images/book000001.jpg\" alt=\"La piramitre di fango\">
                        </div>
                        <div class=\"back\">
                            <header>
                                <h3 class=\"color-m\">
                                    La piramide di fango
                                </h3>
                            </header>
                            <div class=\"info\">
                                <div class=\"author color-i\">
                                    Andrea Camilleri
                                </div>
                                <time class=\"publishing-date color-n\" datetime=\"2014-01-01\">2014</time>
                                <div class=\"publisher color-d\">
                                    Sellerio Editore
                                </div>
                                <p>
                                    Si sono aperte le cateratte del cielo. I tuoni erompono con fragore. Nel generale ottenebramento, e sotto la pioggia implacabile, tutto si impantana e smotta. Il fango monta e dilaga: è una coltre di spento grigiore sulle lesioni e sulle frane. La brutalità della natura si vendica della politica dei governi corrotti, che non si curano del rispetto geologico; e assicurano appalti e franchigie alle società di comodo e alle mafie degli speculatori...
                                </p>
                            </div>
                        </div>
                    </article>
    
                    <article class=\"book\">
                        <div class=\"front-in\">
                            <div id=\"page_two\"></div>
                        </div>
                        <div class=\"front\">
                            <img src=\"images/book000002.jpg\" alt=\"La piramitre di fango\">
                        </div>
                        <div class=\"back\">
                            <header>
                                <h3 class=\"color-m\">
                                   Manuale di sopravvivenza per esseri umani che si sento alieni
                                </h3>
                            </header>
                            <div class=\"info\">
                                <div class=\"author color-i\">
                                    Matteo Gracis
                                </div>
                                <time class=\"publishing-date color-n\" datetime=\"2022-01-01\">2022</time>
                                <div class=\"publisher color-d\">
                                    Do it human
                                </div>
                                <p>
                                    Sei disposto a mettere in discussione le tue convinzioni? A guardare il mondo da un'altra prospettiva ma soprattutto a metterti veramente in gioco? Se la risposta a tali domande è sì, questo libro fa per te, in caso contrario, lascia perdere perché rischi di metterti nei guai. Un manuale di sopravvivenza per tutti coloro che cercano qualcosa in più, che vogliono guardare oltre e non si accontentano delle versioni ufficiali dei fatti, delle verità assolute e dei diktat.
                                </p>
                            </div>
                        </div>
                    </article>
    
                    <article class=\"book\">
                        <div class=\"front-in\">
                            <div id=\"page_three\"></div>
                        </div>
                        <div class=\"front\">
                            <img src=\"images/book000003.jpg\" alt=\"La piramitre di fango\">
                        </div>
                        
                        <div class=\"back\">
                            <header>
                                <h3 class=\"color-m\">
                                    Rumatera imbrecanati nello spaziotempo
                                </h3>
                            </header>
                            <div class=\"info\">
                                <div class=\"author color-i\">
                                    Nicolò Targhetta
                                </div>
                                <time class=\"publishing-date color-n\" datetime=\" 2021-01-01\"> 2021</time>
                                <div class=\"publisher color-d\">
                                    Becco Giallo
                                </div>
                                <p>
                                    Un'avventura demenziale in un Veneto distopico dove è in vigore il proibizionismo, le sagre sono vietate e i Rumatera sono un gruppo neomelodico di fama mondiale. Una storia a \"quattro\" mani firmata dalla band veneta e dallo scrittore e blogger Nicolò Targhetta. Una satira demenziale e distopica sul Veneto di oggi, che farà sbellicare tutti (tranne i veneti). Dopo i Pinguini Tattici Nucleari, i Fast Animals and Slow Kids, Murubutu, e i Rovere, un nuovo volume a fumetti dedicato ad una band contemporanea seguita da migliaia di fans.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>  
        </main>
        <footer class=\"t-center color-white t-bold\">
            Copyright $anno - Pedron Leonardo &copy;
        </footer>
    </body>
    </html>";
?>