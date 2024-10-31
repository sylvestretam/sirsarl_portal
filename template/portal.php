<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PORTAL</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="template/assets/logosisas.jpg" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="template/css/styles.css" rel="stylesheet" />
        <link href="template/css/custom.css" rel="stylesheet" />
    </head>
    <body id="page-top">

        <header class="p-2 mb-1 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="?action=portal" class="d-flex align-items-end mb-2 mb-lg-0">
                        <img src="template/assets/logosisas.jpg" alt=""  height="40" class="align-middle">
                    </a>

                    <b class="fs-4 align-middle font-weight-bold">PORTAL</b>
            
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <!-- <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Products</a></li> -->
                    </ul>
            
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <span class="fs-6 lead"> <?= $_SESSION['noms']." ".$_SESSION['prenoms']  ?> </span>
                    
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="template/assets/favicon.ico" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Account</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="./?action=logout">Sign out</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <div class="container-fluid py-3">

            <!-- Portfolio Grid Items-->
            <div class="row justify-content-start">

                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/vtc.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL VTC</h5>
                            <div style="height:75px">
                                <p class="card-text">Exploitation VTC.</p>
                            </div>
                            <a href="./?action=vtc"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/btl.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL HEMLE</h5>
                            <div style="height:75px">
                                <p class="card-text">Commerce et Vente.</p>
                            </div>
                            <a href="./?action=btl"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/prod.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL PROD</h5>
                            <div style="height:75px">
                                <p class="card-text">usine et production.</p>
                            </div>
                            <a href="./?action=prod"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-3">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/immobilisation.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL IMMO</h5>
                            <div style="height:75px">
                                <p class="card-text">Immobilisations et Ammortissements.</p>
                            </div>
                            <a href="./?action=immo"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-3 mt-1">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/courier.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL COURRIER</h5>
                            <div style="height:75px">
                                <p class="card-text">Gestion du courriers.</p>
                            </div>
                            <a href="./?action=courrier"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-3 mt-1">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/buy.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL BUY</h5>
                            <div style="height:75px">
                                <p class="card-text">Achat et Journal.</p>
                            </div>
                            <a href="./?action=buy"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-3 mt-1">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/sell.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL SELL</h5>
                            <div style="height:75px">
                                <p class="card-text">Vente et Journal.</p>
                            </div>
                            <a href="./?action=sell"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-3 mt-1">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/tresorerie.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL TRESORERIE</h5>
                            <div style="height:75px">
                                <p class="card-text">Caisse et Banque.</p>
                            </div>
                            <a href="./?action=treso"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 7-->
                <div class="col-md-6 col-lg-3 mt-1">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/comptabilite.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL BESOIN</h5>
                            <div style="height:75px">
                                <p class="card-text">Besoin et Traitement.</p>
                            </div>
                            <a href="./?action=besoin"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 8-->
                <div class="col-md-6 col-lg-3 mt-1">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/reunion.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL REUNION</h5>
                            <div style="height:75px">
                                <p class="card-text">Réunion et Reservation de salle.</p>
                            </div>
                            <a href="./?action=reunion"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 9-->
                <div class="col-md-6 col-lg-3 mt-1">
                    <div class="card text-center shadow-lg mx-auto" style="width: 18rem;height:300px">
                        <div class="card-body">
                            <img src="template/assets/btl.png" style="height:7rem" class="rounded">
                            <h5 class="card-title">SIRSARL KONTRITOK</h5>
                            <div style="height:75px">
                                <p class="card-text">Stock et Vente.</p>
                            </div>
                            <a href="./?action=kontritok"  class="btn btn-success">ACCEDER</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <script src="template/js/scripts.js"></script>
        <script src="template/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
