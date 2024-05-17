<style>
    nav {
        margin: auto;
        box-shadow: #7BC9FF 0px 5px 15px;
    }

    .na {
        padding: 5% !important;
    }
</style>




<div class="row na">
    <div class="col-3"></div>
    <div class="col-6">

        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="home">LocoTrust</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="home">Home
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="listing">Annonces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Compte</a>
                            <div class="dropdown-menu">
                                    @guest
                                    <a class="dropdown-item" href="register">inscription</a>
                                    <a class="dropdown-item" href="login">Connexion</a>
                                        
                                    @endguest
                                    <a class="dropdown-item" href="profil">Mon compte</a>
                                    <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="deconnexion">Déconnexion</a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    <div class="col-3"></div>
</div>
