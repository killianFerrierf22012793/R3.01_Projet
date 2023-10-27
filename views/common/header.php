<body>
    <nav class="navbar navbar-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/media/public_assets/CyphubLogo.png" alt="Logo Cyphub" id="logoImg" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav responsive-menu ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <form class="d-flex">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </li>
                    <li class="nav-item">
                        <a href="<?= SessionManager::isUserConnected() ? "/Settings/ManageAccount" : "/Auth/Login"; ?>">
                            <img src="<?= (SessionManager::isUserConnected() && $_SESSION['UrlPicture']!==null ) ? $_SESSION['UrlPicture'] : Constants::PDP_URL_DEFAULT; ?>" alt="Logo profil" class="menu-img">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/Auth/LogOut">
                            <img src="/media/public_assets/logout.png" alt="Logo logout" class="menu-img me-2">
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <nav class="navbar navbar-bottom navbar-expand navbar-light bg-light">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/Menu/ActualityFeed">Veille Tech</a>
                    <a class="nav-link" href="/Menu/BlogFeed">Blogs</a>
                    <!--<a class="nav-link" href="/Menu/ForumFeed">Forum</a>-->
                    <?php //si c'est bon on affiche
                    if (SessionManager::isUserConnected()) {
                        //si la page est /Menu/BlogFeed
                        if ( $this->_mapOfSplitUrl['controller'] === 'ControllerMenu' && $this->_mapOfSplitUrl['action'] === 'BlogFeedAction') {
                            $leliendelarequete = "/Post/BlogEdit";
                            $nomTypePost = "Blog";
                        } else if ($this->_mapOfSplitUrl['controller'] === 'ControllerMenu' && $this->_mapOfSplitUrl['action'] === 'ForumFeedAction') {
                            $leliendelarequete = "/Post/ForumEdit";
                            $nomTypePost = "Forum";
                        }
                    }
                     //si on est connecté, et dans la page /Menu/BlogFeed $leliendelarequete = "/Post/BlogEdit";
                    // et $nomTypePost = "Blog"
                    // si on est connecté et dans la page /Menu/ForumFeed $leliendelarequete = "/Post/ForumEdit";
                    // et $nomTypePost = "Forum"
                    echo '<a class="NewPost" href="'.$leliendelarequete.'">Nouveau' .$nomTypePost.' </a>'
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <script src="../../common_scripts/navLinks.js"></script>
</body>
