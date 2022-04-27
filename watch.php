<?php
    echo '<!doctype html>
    <html lang="fr"> 
        <link rel="icon" href=
        "img/nuagefavicon.png" type="image/x-icon">
        <head> 
            <link rel="stylesheet" href="watch-film.css">
            <link rel="stylesheet" href="watch-responsive.css">
            <meta charset="utf-8">
            <title>Le Nuage | Watching</title>
        </head>
        <header>
            <ul class="nav-bar">
                <li><a class="active" href="index.html">Acceuil </a></li>
                <li class="spe" id="spe">Catégories
                    <ul class="sous-menu" id="sous-menu">
                        <li class="sous"><a href="film.html">|Films|</a></li>
                        <li class="sous"><a href="">|Séries|</a></li>
                        <li class="sous"><a href="">|Animés|</a></li>
                    </ul>
                </li>
                <li><a  href="#Bientôt">Bientôt</a></li>
                <li><a  href="#Support">Support</a></li>
            </ul>
        </header>
            <nav>
                <div class="container">
                    <h1 class="BigText"><iframe id="film" width="640" height="360" frameborder="0" src="" allowfullscreen ></iframe></h1>
                    <a href="https://discord.gg/HUAJS6dgvA"><button class="btn2">Discord</button></a>
                    <img class ="arcaneimg "src="https://cdn.discordapp.com/attachments/943626429655027792/962650381828104203/wallpaperflare.com_wallpaper_2.jpg" alt="">
                    
                    <section class="moviesection">
                        <h2>Le Nuage ☁🍃</h2>
                        <hr class="rounded">
                        <div class="moviecontainer" id="movies">
                            <div class="movieimg">
                                <h2>Le Nuage n\'héberge aucune vidéo sur ses serveurs. Contactez-nous ou contactez directement la plateforme d\'hébergement vidéo pour toute réclamation de droits relatifs aux contenus présents sur le site.</h2>
                            </div>
                        </div>
                    </section>
                </div>
            </nav>
        </body> 
        <?php
            $url = $_GET["theFilm"];
            echo $url;
        ?>

        <script type="text/javascript">
        // javascript 
            
        // bug
            // var the_film = \'<?php echo $url; ?>\';
            // console.log(the_film);

            // const film = document.getElementById("film");
            // film.src=the_film;


            const categories = document.getElementById("spe");
            const sous_menu = document.getElementById("sous-menu");
    
            categories.addEventListener("click", () =>{
                sous_menu.classList.toggle("sous-menu-active");
            });

        </script>
    </html>
    ';
?>
<?php
    $url = $_GET["theFilm"];
    echo $url;
?>
<script>    
    var the_film = '<?php echo $url; ?>';

    list_of_film = {"captaine":"https://mega.nz/embed/9o1nwLzZ#aQkql1GBo8PVopVFkITWH6_WPWCGv7276gSefInfcJQ", 
        "spiderman":"https://mega.nz/embed/Np00jbJL#wZjAjAWMS2n_8Cd_bCHZO18f7vHZdLk9dFijcy_8Irs"}
    
    const film = document.getElementById("film");

    console.log("the film is:  "+ the_film);
    console.log("the url of the film is:  "+ list_of_film[the_film]);
    film.src = list_of_film[the_film];
</script>
