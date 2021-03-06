<!doctype html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nos Partenaires</title>
        <meta name="keywords" content="SnowSet,Sky,Chaussette,Socks,Sport,Stylized,Colorful,Snow,Neige,Equipement,XGAMES">
        <meta name="author" content="Nicolas Chapeau et Vianney Traina">
        <meta name="description" content="Nos partenaires !">


        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/partenaires.css">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="jquery/aos.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>



    <body>
        <div class="container">

        <?php include 'includes/header.php'; ?>

        <main>
            <div class="title-center">
                <h2><span>Nos partenaires</span></h2>
            </div>
        </main>

        <section data-aos="fade-up-right" class="section-xgames">
            <img class="article-img" src="img/xgames.jpg" alt="x games">
            <article class="article-xgames">
                <h3>X games</h3>
                <p>Les X Games sont une compétition annuelle de plusieurs sports dits extrêmes. Les jeux sont organisés et diffusés aux États-Unis (à Aspen, Colorado) par le réseau de télévision ESPN et sont séparés en deux saisons : les Winter X Games et les Summer X Games.</p>
                <div class="container-btn">
                    <a href="marque.php">
                        <button class="btn discover">Discover</button>
                    </a>
                </div>
            </article>
        </section>

        <section data-aos="fade-up-left" class="section-rock">
            <img class="article-img" src="img/rock.jpg" alt="rock snowboard tour">
            <article class="article-rock">
                <h3>Rock on snowboard tour</h3>
                <p>Un événement itinérant 100% snowboard, à l'occasion duquel plus de 25 marques proposent de tester gratuitement leur novueau matériel aux passionés, initiés et amateurs, venus de la France entière. </p>
                <div class="container-btn">
                    <a href="marque.php">
                        <button class="btn discover">Discover</button>
                    </a>
                </div>
            </article>
        </section>

        <section data-aos="fade-up-right" class="section-skiforce">
            <img class="article-img" src="img/skiforce.jpg" alt="rock snowboard tour">
            <article class="article-skiforce">
                <h3>Ski force winter tour</h3>
                <p>Le Ski Force Winter Tour revient avec près de 20 marques à ses côtés, lors de deux weekends dans deux stations : Tignes et Val d'Isère. Pendant ces deux événemebts, vous pouvez aller découvrir les novuelles gammes et célébrer l'ouverture de la saison.</p>
                <div class="container-btn">
                    <a href="marque.php">
                        <button class="btn discover">Discover</button>
                    </a>
                </div>
            </article>
        </section>

        <button class="topBtn"><i class="fas fa-arrow-circle-up"></i></button>
        
        <?php include 'includes/footer.php' ?>

        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="jquery/aos.js"></script>
    <script>
        AOS.init({
            duration: 2000,
        });
    </script>
    <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>