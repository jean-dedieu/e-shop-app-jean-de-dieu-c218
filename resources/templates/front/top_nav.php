<div class="container">
    <!-- Conteneur principal pour regrouper le contenu de la barre de navigation -->

    <div class="navbar-header">
        <!-- Section de l'en-tête de la barre de navigation -->

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <!-- Bouton permettant d'afficher ou de masquer les liens de navigation sur les petits écrans (dispositifs mobiles) -->

            <span class="sr-only">Navigation</span>
            <!-- Texte accessible uniquement pour les lecteurs d'écran, indiquant que ce bouton sert à ouvrir/fermer la navigation -->

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <!-- Trois barres horizontales (classiques pour les icônes de "menu burger" sur mobile) -->
        </button>

        <a class="navbar-brand" href="index.php">Accueil</a>
        <!-- Lien vers la page d'accueil avec le texte "Home" -->
    </div>

    <!-- Collecte les liens de navigation, les formulaires et autres contenus dans une section collapsible -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <!-- Liste des éléments de navigation -->

            <li>
                <a href="shop.php">Boutique</a>
                <!-- Lien vers la page "Shop" pour afficher les produits -->
            </li>

            <li>
                <a href="login.php">Se connecter</a>
                <!-- Lien vers la page "Login" pour la connexion utilisateur -->
            </li>

            <li>
                <a href="admin">Back office</a>
                <!-- Lien vers la section d'administration -->
            </li>

            <li>
                <a href="checkout.php">Paiement</a>
                <!-- Lien vers la page "Checkout" pour valider les commandes -->
            </li>

            <li>
                <a href="contact.php">Contact</a>
                <!-- Lien vers la page "Contact" pour accéder aux informations de contact -->
            </li>
        </ul>
    </div>
    <!-- Fin de la section collapsible (liens de navigation) -->

</div>
<!-- Fin du conteneur principal -->