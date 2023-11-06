<?php 
  require_once(__DIR__ . "/menu/header.php");
?>

        <!-- Header -->
        <header class="bg-warning bg-gradient text-dark">
          <div id="debut" class="container px-4 text-center">
            <h1 class="display-3 text-center fw-bold text-uppercase mb-3 mt-4">Danses</h1>
              <h2 class="display-6 fw-bolder">
                <a href="#salsa">Salsa</a> |
                <a href="#bachata">Bachata</a> |
                <a href="#wcs">West Coast Swing</a>
              </h2>
          </div>
        </header>

        <!-- Section listes_danses -->
        <section id="listes_danses">
            <div class="container mt-1">
              <div class="row align-items-center" id="salsa">
                  <div class="col-lg-8 col-md-12">
                    <h2 class="text-center fw-bold display-3">SALSA</h2>
                    <p class="lead">La salsa s'est démocratisée dans les années 1960 dans les quartiers populaires de Cuba et de Porto Rico. Elle est devenue rapidement populaire dans le monde entier, grâce à son rythme entraînant et à ses mouvements passionnés. Depuis sa création, la salsa a évolué et s'est diversifiée, donnant naissance à différentes styles et variantes. Aujourd'hui, elle est pratiquée dans de nombreux pays et est devenue un phénomène culturel majeur.</p>
                    <div class="text-center my-2">
                      <a class="btn btn-warning fw-bold btn-lg" href="danses/salsa.php">Plus de détails sur la Salsa</a>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-12">
                    <img src="images/salsa_dancers.jpg" alt="Image carrée" class="img-fluid">
                  </div>
              </div>
              <hr class="my-4 border-top border-dark">
            </div>
          <div class="container mt-5">
            <div class="row align-items-center" id="bachata">
              <div class="col-lg-4 col-md-12 order-lg-1 order-md-2 order-sm-2 order-2">
                <img src="images/bachata_dancers.jpg" alt="Image carrée" class="img-fluid">
              </div>
              <div class="col-lg-8 col-md-12 order-lg-2 order-md-1 order-sm-1 order-1">
                <h2 class="text-center fw-bold display-3">BACHATA</h2>
                <p class="lead">La bachata, une danse sensuelle et émotionnelle originaire de la République dominicaine, a conquis les cœurs du monde entier. Apparue vers les années 60 et popularisée une vingtaine d'années plus tard, la bachata était à l'origine considérée comme une danse de la classe ouvrière et a été associée à des thèmes mélancoliques et romantiques. Au fil du temps, la bachata a évolué pour devenir un genre musical à part entière et une danse populaire dans de nombreux pays.</p>
                <div class="text-center my-2">
                  <a class="btn btn-warning fw-bold btn-lg" href="danses/bachata.php">Plus de détails sur la Bachata</a>
                </div>
              </div>
            </div>
            <hr class="my-4 border-top border-dark">
          </div>
          <div class="container mt-5">
            <div class="row row align-items-center" id="wcs">
                <div class="col-lg-8 col-md-12">
                  <h2 class="text-center fw-bold display-3">WEST COAST SWING (WCS)</h2>
                  <p class="lead">La West Coast Swing a gagné en popularité dans le monde entier. Apparue dans les années 1930, cette danse est souvent associée à la musique de jazz et de blues. La West Coast Swing se distingue par son style unique qui allie des mouvements linéaires, des figures complexes et une grande improvisation. Au fil du temps, elle est devenue une danse de couple appréciée pour sa créativité et son interprétation musicale.</p>
                  <div class="text-center my-2">
                  <a class="btn btn-warning fw-bold btn-lg" href="danses/wcs.php">Plus de détails sur la WCS</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12">
                  <img src="images/wcs_dancers.jpg" alt="Image carrée" class="img-fluid">
                </div>
            </div>
          </div>
        </section>

<?php 
  require_once(__DIR__ . "/menu/footer.php");
?>