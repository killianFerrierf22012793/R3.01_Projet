<head>
    <link rel="stylesheet" href="../../common_styles/general.css">
    <link rel="stylesheet" href="../../common_styles/homeFeed.css">
</head>
<body>

<section class = "background">
    <section class="padding text-left">
        <div class="row">  <!-- Ajout d'une rangée -->
            <div class="col-lg-6 col-md-8">
                <h1 class="homeTitle">Bienvenue chez Cyphub !</h1>
                <p class="colorText lead text-body-secondary">Ici est le début de la page home avec juste une phrase qui finira par être modifiée.</p>

                <div class="col-lg-8 col-md-8 mx-left">
                    <a href="/Auth/Login" class="cta colorText noneColor text-left block">
                        <span class="visual">Se connecter</span>
                        <svg class="svg1" width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                    <a href="/Auth/SignUp" class="cta colorText noneColor text-left block">
                        <span class="visual">Créer un compte</span>
                        <svg class="svg1" width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-4 text-right">  <!-- Cette colonne est pour l'image -->
                <img src="/media/public_assets/homePicture.png" id="decorationImg" alt="Logo Cyphub" width="632" height="395">
            </div>
        </div>
    </section>
</section>



<section class="py-3 text-center container overlap ">
    <div class="py-lg-5">
        <div id="buttonContainer">
            <div class="col">
                <a href="/Menu/ActualityFeed" type="button" class="w-20 rounded-4 btn btn-lg text-center colorButton shadow-gn grow-button">
                    <img class="sizeRs" src="../../media/public_assets/icone/iconeTerminalWhite.png"alt="Icone Veille Tehcnologique " height="150" width="150">
                    <p class="colorText">Veille Technologique</p>
                </a>
            </div>
            <div class="col">
                <a href="blogFeed.php" type="button" class="w-20 rounded-4 btn btn-lg text-center colorButton shadow-gn grow-button">
                    <img class="sizeRs" src="../../media/public_assets/icone/iconeBlogWhite.png"alt="Icone Blog" height="150" width="150">
                    <p class="colorText">Blog</p>
                </a>
            </div>
            <div class="col">
                <a href="forumFeed.php" type="button" class="w-20 rounded-4 btn btn-lg text-center colorButton shadow-gn grow-button">
                    <img class="sizeRs" src="../../media/public_assets/icone/iconeForumWhite.png"alt="Icone Forum" height="150" width="150">
                    <p class="colorText">Forum</p>
                </a>
            </div>
        </div>
    </div>
</section>