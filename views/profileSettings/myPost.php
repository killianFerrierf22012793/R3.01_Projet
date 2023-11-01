<?php require 'sideBar.php' ?>
<script src="../../common_scripts/dropdown.js"></script>
<link rel="stylesheet" href="../../common_styles/dropdown.css">

<div class="col container" id="rightSide">
    <!--Pas sur que sa fonctionne à voir avec Killian et Tom -->

    <!-- Section pour le titre -->
    <div class="row mb-2 mt-2">
        <div class="col-md-6">
            <h1>Mes Posts </h1>
        </div>
        <!-- Section pour le dropdown filtrer -->
        <div class="col-md-6 d-flex align-items-center justify-content-end">
            <div class="dropdown">
                <button type="button" class="btn btn-primary" id="filterButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-filter" viewBox="0 0 16 16">
                        <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
                    </svg>
                    Filtrer
                </button>
                <ul class="dropdown-menu">
                    <label><input class="form-control" id="myInput" type="text" placeholder="Search.."></label>
                    <li><a href="#">Data</a></li>
                    <li><a href="#">Cybersec</a></li>
                    <li><a href="#">IDK</a></li>
                </ul>
            </div>
        </div>
        <hr class="my-3">
        <!--Section pour les articles enregistrer -->
        <div class="col-md-6 p-3">
            <div class="btn bg-body-tertiary round background grow-button d-block" role="button">
                <div class="d-flex justify-content-center mb-2">
                    <img src="../../media/public_assets/imageTest.jpeg" alt="Logo" class="responsive-image-setting round p-1">
                </div>
                <div class="text-content">
                    <h1 class="responsive-title">Test de myPost avec un titre grand pour vérifier que le js marche bien sinon ca serait très decevant quand mm tu ne trouves pas ?? moi je trouve que si après je parle tout seul donc bon c'est triste</h1>
                    <p class="lead responsive-text">Catégorie - 00-00-00 - Par l'auteur</p>
                    <p class="responsive-text">ça va parler chinois : Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit neskwik</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-3">
            <div class="btn bg-body-tertiary round background grow-button d-block" role="button">
                <div class="d-flex justify-content-center mb-2">
                    <img src="../../media/public_assets/imageTest.jpeg" alt="Logo" class="responsive-image-setting round p-1">
                </div>
                <div class="text-content">
                    <h1 class="responsive-title">Test de myPost</h1>
                    <p class="lead responsive-text">Catégorie - 00-00-00 - Par l'auteur</p>
                    <p class="responsive-text">ça va parler chinois : Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit neskwik ça va parler chinois : Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit neskwik ça va parler chinois : Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit neskwik ça va parler chinois : Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit neskwik</p>
                </div>
            </div>
        </div>
    </div>
    <script src="../../common_scripts/maxTextSize.js"></script>
</div>

