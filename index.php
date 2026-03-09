<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ShopDirect – Accueil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
  <!-- Header / Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">ShopDirect</a>
      <div class="collapse navbar-collapse show">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="view-user.php">Boutique</a></li>
          <li class="nav-item"><a class="nav-link" href="">Moniteur</a></li>
          <li class="nav-item"><a class="nav-link" href="">Clavier</a></li>
          <li class="nav-item"><a class="nav-link" href="">PC</a></li>
          <li class="nav-item"><a class="nav-link" href="">Tablettes</a></li>
          <li class="nav-item"><a class="nav-link" href="">Accessoires</a></li>
          <li class="nav-item"><a class="nav-link" href="">Support</a></li>
          <li class="nav-item"><a class="nav-link" href="view-admin.php">Vision administrateur</a></li>
          <li class="nav-item"><a class="nav-link" href="panier.html"><img src="assets/img/logo-panier.png" alt="Panier"
                                                                        class="nav-icon"></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenu principal -->
  <main class="container-fluid px-2 my-3 page-spacing">
    <div class="text-center mb-5">
      <h1 class="mb-3">Produits en vedette</h1>
      <p class="lead">Découvrez une sélection de nos produits phares.</p>
    </div>

    <!-- Produits en vedette -->
    <section>
      <!-- 3 premiers produits : pleine largeur -->
      <div class="card border-0 mb-2 position-relative text-white">
        <img
          id="heroImage"
          src="assets/img/large-monitor-with-background.jpg" class="img-fluid w-100 product-image" alt="Moniteur 4K">

          <!-- Bouton boutique -->
          <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3">
            <a href="view-user.html" class="btn btn-outline-light btn-sm rounded-pill px-4 btn-shop">
              Découvrir la boutique</a>
          </div>
      </div>


      <div class="card border-0 mb-2 position-relative text-white">
        <img src="assets/img/moniteur-accueil.jpg" class="img-fluid w-100 product-image" alt="Moniteur 4K">

        <!-- Titre en HAUT & CENTRÉ -->
        <div class="position-absolute top-0 start-0 w-100 p-3 text-center product-title">
          <h3 class="display-5 mt-5 fw-bold mb-0">Moniteur 4K Ultra HD</h3>
          <p class="lead">Voyez chaque détail, vivez chaque image.</p>
        </div>

        <!-- Boutons en BAS -->
        <div class="position-absolute bottom-0 start-0 w-100 p-3">
          <div class="d-flex gap-2 justify-content-center">
            <button class="btn btn-secondary btn-sm rounded-pill btn-monitor">En savoir plus</button>
            <button class="btn btn-outline-light btn-sm rounded-pill">Ajouter au panier</button>
          </div>
        </div>
      </div>

      <div class="card border-0 mb-2 position-relative text-white">
        <img src="assets/img/clavier-accueil.jpg" class="img-fluid w-100 product-image" alt="Clavier moniteur">

        <div class="position-absolute top-0 start-0 w-100 p-3 text-center product-title">
          <h3 class="display-5 mt-5 fw-bold mb-0">Clavier Moniteur ProTouch 4K</h3>
          <p class="lead">La précision au bout des doigts, la performance <br>sous vos yeux.</p>
        </div>
          
          <div class="position-absolute bottom-0 start-0 w-100 p-3">
          <div class="d-flex gap-2 justify-content-center">
            <button class="btn btn-secondary btn-sm rounded-pill btn-keybord">En savoir plus</button>
            <button class="btn btn-outline-light btn-sm rounded-pill">Ajouter au panier</button>
          </div>
        </div>
      </div>




      <!-- Autres produits : par groupe de deux -->
      <div class="row g-2">

        <!-- Produit 1 -->
        <div class="col-md-6">
          <div class="card border-0 position-relative text-white">
            <img src="assets/img/ordi-accueil.jpg"
                 class="img-fluid w-100 product-image"
                 alt="Moniteur 4K">

            <!-- Titre en haut -->
            <div class="position-absolute top-0 start-0 w-100 p-3 text-center product-title-4">
              <h3 class="h4 fw-bold mb-1">Laptop UltraBook X1</h3>
              <p class="small mb-0">Puissance, mobilité et style réunis dans un seul geste.</p>
            </div>

            <!-- Boutons en bas -->
            <div class="position-absolute bottom-0 start-0 w-100 p-3">
              <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-secondary btn-sm rounded-pill btn-detail-p4">En savoir plus</button>
                <button class="btn btn-outline-light btn-sm rounded-pill btn-add-p4">Ajouter au panier</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Produit 2 -->
        <div class="col-md-6">
          <div class="card border-0 position-relative text-white">
            <img src="assets/img/console-accueil.jpg"
                 class="img-fluid w-100 product-image"
                 alt="Moniteur HD">

            <div class="position-absolute top-0 start-0 w-100 p-3 text-center product-title">
              <h3 class="h4 fw-bold mb-1">Xbox Series X</h3>
              <p class="small mb-0"> Jouez plus vite, plus fort, plus loin.</p>
            </div>

            <div class="position-absolute bottom-0 start-0 w-100 p-3">
              <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-secondary btn-sm rounded-pill btn-detail-p5">En savoir plus</button>
                <button class="btn btn-outline-light btn-sm rounded-pill">Ajouter au panier</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Produit 3 -->
        <div class="col-md-6">
          <div class="card border-0 position-relative text-white">
            <img src="assets/img/casque-accueil.jpg"
                 class="img-fluid w-100 product-image"
                 alt="Moniteur Pro">

            <div class="position-absolute top-0 start-0 w-100 p-3 text-center product-title-6">
              <h3 class="h4 fw-bold mb-1">SoundWave Pro</h3>
              <p class="small mb-0">Ressentez chaque note, vivez chaque vibration.</p>
            </div>

            <div class="position-absolute bottom-0 start-0 w-100 p-3">
              <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-secondary btn-sm rounded-pill btn-detail-p6">En savoir plus</button>
                <button class="btn btn-outline-light btn-sm rounded-pill btn-add-p6">Ajouter au panier</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Produit 4 -->
        <div class="col-md-6">
          <div class="card border-0 position-relative text-white">
            <img src="assets/img/mac-accueil.jpg"
                 class="img-fluid w-100 product-image"
                 alt="Moniteur Gaming">

            <div class="position-absolute top-0 start-0 w-100 p-3 text-center product-title">
              <h3 class="h4 fw-bold mb-1">MacBook Air ProLine</h3>
              <p class="small mb-0">La performance qui disparaît… sauf quand vous en avez besoin.</p>
            </div>

            <div class="position-absolute bottom-0 start-0 w-100 p-3">
              <div class="d-flex gap-2 justify-content-center">
                <button class="btn btn-secondary btn-sm rounded-pill btn-detail-p7">En savoir plus</button>
                <button class="btn btn-outline-light btn-sm rounded-pill">Ajouter au panier</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-light text-center py-3">
    <small>© 2026 ShopDirect Inc. Tous droits réservés.</small>
  </footer>

  <script src="assets/js/main.js"></script>

</body>
</html>
