<?php ini_set('display_errors', 0); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <?php 
    include 'INCLUDES/head.php';
    include 'ACTION/loginaction.php';
    ?>
        <title>Ordidetox - ACCEUIL</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>       
        <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">               
        <link href="css/ordidetox1.css" rel="stylesheet">
        <link href="css/ordidetox2.css" rel="stylesheet">
        <link href="css/ordidetox3.css" rel="stylesheet">
        <link href="css/ordidetox4.css" rel="stylesheet">

    </head>
    
    <body>

        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">

                <div class="navbar-brand">
                     <img src="images/logo.png" class="image_logo_size_oridetox">
                </div>

                <a href="login.php" class="custom-btn btn btn-lg d-lg-none ms-auto me-4">
                    Se connecter
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="#section_1">Acceuil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#section_2">Qu'est-ce-que la cyberdépendance</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#section_3">Symptômes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#section_4">Solutions</a>
                            
                        </li>
                        <li>
                        <a class="nav-link" href="question.php">Forum</a>
                        </li>
                    </ul>
                    <?php   
                    if(!isset($_SESSION['auth'])){
                        print'                    <div class="ms-auto d-none d-lg-block">
                        <a href="login.php" class="custom-btn btn btn-lg">
                            Se connecter
                        </a>
                    </div>';
                    }
                    else{
                        print'                    <div class="ms-auto d-none d-lg-block">
                        <a href="ACTION/logout.php" class="custom-btn btn btn-lg">
                            Se deconnecter
                        </a>
                    </div>';
                    }
                    ?>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="heroText">
                                <h1 class="text-white mb-lg-5 mb-4">Briser les chaînes numériques</h1>
                               
                            </div>
                        </div>

                    </div>
                </div>

                <div class="overlay"></div>
            </section>

            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-12 ms-lg-auto mb-5 mb-lg-0">
                        </div>

                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                            <img src="images/apple-1868496_1280.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12 m-auto">
                                            <h3 class="mb-3">Qu'est-ce-que la cyberdépendance</h3>

                                            <p>La cyberdépendance est l'effet d'utiliser de multiples applications d'Internet dont l'usage devient excessif et elle devient difficilement</p>

                                            <p>contrôlable avec pour conséquence des problèmes physiques, psychologiques et sociaux.</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <section class="about section-padding" id="section_3">
                                <div class="col-12">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                                    <img src="images/laptop-2838921_1280.jpg" class="img-fluid" alt="">
                                                </div>
        
                                                <div class="col-lg-5 col-12 m-auto">
                                                    <h3 class="mb-3">Les symptômes de la cyberdépendance</h3>
        
                                                    <p>Les symptômes de la cyberdépendance sont multiples. Voici quelques exemples de symptômes :</p>
                                                    <br>
                                                    <p>- Mauvais sommeil</p>
                                                    <br>
                                                    <p>- Maux de tête</p>
                                                    <br>
                                                    <p>- Besoin obsessionnel d'accéder à Internet</p>
                                                    <br>
                                                    <p>- Diminution de l’intérêt aux activités qui sont hors ligne</p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                        <br><br>
                                        <section class="about section-padding" id="section_4">
                                        <div class="col-12">
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                                            <img src="images/vue-face-adolescent-triste-victime-cyberintimidation.jpg" class="img-fluid" alt="">
                                                        </div>
                
                                                        <div class="col-lg-5 col-12 m-auto">
                                                            <h3 class="mb-3">Les solutions pour combattre la cyberdépendance</h3>
                
                                                            <p>1. Lorsque vous êtes en ligne, il est possible de mettre une minuterie pour arrêter plus facilement.</p>
                
                                                            <p>2. Vous pouvez également supprimer vos notifications, ce qui vous incitera moins à regarder votre téléphone.</p>
                                                            
                                                            <p>3. Vous pouvez vous fixer des objectifs de réduction du temps par jour sur les écrans.</p>

                                                            <p>4. Pour vous motiver, il est possible de noter les avantages et les inconvénients.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                                <br><br>
                                                <section class="about section-padding" id="section_5">
                                                <div class="col-12">
                                                    <div class="tab-content" id="nav-tabContent">
                                                        <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                                                    <img src="images/igromania-1894847_1280.jpg" class="img-fluid" alt="">
                                                                </div>
                        
                                                                <div class="col-lg-5 col-12 m-auto">
                                                                    <h3 class="mb-3">Où pouvez-vous trouver de l'aide</h3>
                        
                                                                    <p>Vous pouvez parler ou écrire à des experts à propos de ce sujet.</p>
                        
                                                                    <p>Vous pouvez communiquer sur leur site :  <a href="https://aidejeu.ca/#">https://aidejeu.ca/#</a></p>
                                                                    
                                                                    <p>Vous pouvez communiquer au : 1 514 527-0142 pour la région de Montréal ou au 1 800 461-0140 pour toutes les régions du Québec.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                    </section>

                               
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 me-auto mb-4">
                        <h5 class="text-white mb-3">Newsletter</h5>
                                <div class="col-lg-4 col-md-4 col-5">                                  
                                 
                                </div>
                                <h5>AUCUN COURIEL POUR L'INSTANT</h5>
                            </div>
                        </form>
                    </div>



                    <div class="site-footer-bottom mt-5">
                        <div class="row pt-4">
                            <div class="col-lg-6 col-12">
                                <p class="copyright-text tooplate-link">ORDIDETOX 2024 | AUCUNE COPIE N'EST PERMISE
                            </div>

                            <div class="col-lg-3 col-12 ms-auto">
                                <ul class="social-icon">
                                    <li><a href="https://www.instagram.com/ordidetox/" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="https://t.me/ordidetox" class="social-icon-link bi-telegram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
