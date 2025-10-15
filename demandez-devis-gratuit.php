<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="utf-8">
    <title>NSS - Société de Plomberie </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
            .error {
            color: red;
        }
        </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!--
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                
                    <div class="h-100 d-inline-flex align-items-center" id="icone">
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </a>
            </div>
            
            <div class="col-lg-9 col-md-12 text-end">
                <div class="h-100 d-inline-flex align-items-center me-4" >       
                    <i class="fa fa-map-marker-alt text-primary me-2"></i>
                    <p class="m-0">35 Bd Zerktouni , 5ème étage N°8 Casablanca – Maroc</p>
                </div>

           

                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="far fa-envelope-open text-primary me-2"></i>
                    <p class="m-0">nss.plomberie.maroc@gmail.com</p>
                </div>
                
            </div>
        </div>
    </div>-->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 py-lg-0 px-lg-4">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">NSS</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <img src="img/logo-nss-plomberie.png" class="winb">
                    <a href="https://plomberie-casablanca-maroc.com" class="nav-item nav-link">Accueil</a>
                    <a href="apropos-nous.html" class="nav-item nav-link">A-propos</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="societe-assainissement-casablanca.html" class="dropdown-item">Assainissement</a>
                            <a href="societe-debouchage-evier-lavabo-casablanca.html" class="dropdown-item">Débouchage Evier et lavabo</a>
                            <a href="societe-debouchage-wc-casablanca.html" class="dropdown-item">Débouchage WC</a>
                            <a href="societe-installation-plombierie-casablanca.html" class="dropdown-item">Dépannage Plomberie</a>
                            <a href="societe-desembouage-casablanca.html" class="dropdown-item">Désembouage</a>
                            <a href="societe-installation-eau-chaud-casablanca.html" class="dropdown-item">Installation chaudière</a>
                            <a href="societe-installation-chaufage-casablanca.html" class="dropdown-item">Installation de Chauffage</a>
                            <a href="societe-installation-robinet-casablanca.html" class="dropdown-item">Installation de robinets</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <a href="demandez-devis-gratuit.php" class="nav-item nav-link">DEMANDEZ UN DEVIS</a>
                   
                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-1 text-white">Urgence 24/7</p>
                        <a href="tel:0639372790"><h5 class="m-0 text-white">(+212) 06 39 37 27 90</h5></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">DEMANDEZ UN DEVIS GRATUIT</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">DEMANDEZ UN DEVIS GRATUIT</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- DEMANDEZ UN DEVIS GRATUIT Start -->
    <div class="container-fluid px-0" style="margin: 6rem 0;">
        <div class="video wow fadeInUp" data-wow-delay="0.1s">
            <!-- <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal"> -->
                <span></span>
            </button>

            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-white mb-4">Service de plomberie d'urgence</h1>
            <h3 class="text-white mb-0">24 heures sur 24, 7 jours sur 7</h3>
        </div>
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                        <h1 class="mb-4">DEMANDEZ UN DEVIS GRATUIT</h1>
                        <form id="devisForm"  method="POST">
                            <?php
                               $servername = 'localhost';
                               $username = 'nettoyagecasabla_hvnet_nettoyage';
                               $password = 'azerty@123';
                               $dbname = 'nettoyagecasabla_hvnet_nettoyage';
                               $conn = mysqli_connect($servername, $username, $password, $dbname);
                               if (!$conn) {
                                  die('Connection failed: ' . mysqli_connect_error());
                               }
                               $sqls = '';
             
                               $Name = null;
                               $Ville = null;
                               $vlVille = null;
                               $Tel = null;
                               $Email = null;
                               $typ = null;
                               $vltyp = null;
                               $Subject1 = null;
                               $vlSubject1 = null;
                               $Subject2 = null;
                               $vlSubject2 = null;
                               $Subject3 = null;
                               $Message = null;
                               $a = null;
                               $eml = null;
                               $cntsendmail = null;
                               $motex = null;
                               $arobax = null;
             
                               if (isset($_POST['senderName'])) {
                                  $Name = $_POST['senderName'];
                               }
             
                               if (isset($_POST['senderVille'])) {
                                  $Ville = $_POST['senderVille'];
                               }
             
                               if (isset($_POST['senderTel'])) {
                                  $Tel = $_POST['senderTel'];
                               }
             
                               if (isset($_POST['senderEmail'])) {
                                  $Email = $_POST['senderEmail'];
                               }
             
                               if (isset($_POST['ProOrPar'])) {
                                  $typ = $_POST['ProOrPar'];
                               }
             
                               if (isset($_POST['messageSubject1'])) {
                                  $Subject1 = $_POST['messageSubject1'];
                               }
             
                               if (isset($_POST['messageSubject2'])) {
                                  $Subject2 = $_POST['messageSubject2'];
                               }
             
                               if (isset($_POST['messageSubject3'])) {
                                  $Subject3 = $_POST['messageSubject3'];
                               }
             
                               if (isset($_POST['senderMessage'])) {
                                  $Message = $_POST['senderMessage'];
                               }
                               ?>
                            <div id="contactFormHolder">
                               <div class="inputAndLabelCon">
                                  <label for="">Nom/Prenom <span class="necessary">*</span></label><br>
                                  <input type="text" name="senderName" placeholder="Nom" style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " required="">
                               </div>
                               <div class="inputAndLabelCon">
                                  <label for="">Ville <span class="necessary">*</span></label><br>
                                  <select name="senderVille" id="vll" style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " required="">
                                     <option value='' disabled selected hidden>Choisi la Ville</option>
                                     <?php
                                        $query =
                                           'SELECT distinct id,libVille from ville order by libVille asc';
                                        $results = mysqli_query($conn, $query);
                                        while ($rows = mysqli_fetch_assoc(@$results)) { ?>
                                     <option value="<?php echo $rows[
                                              'id'
                                              ]; ?>">
                                        <?php echo $rows['libVille']; ?>
                                     </option>
                                     <?php }
                                        ?>
                                  </select>
                               </div>
                               <div class="inputAndLabelCon">
                                  <label for="">Tél <span class="necessary">*</span></label><br>
                                  <input style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " type="tel" name="senderTel" placeholder="Tél" maxlength="10"
                                     onkeypress="return onlyNumberKey(event)" required="">
                               </div>
                               <div class="inputAndLabelCon">
                                  <label for="">Email <span class="necessary">*</span></label><br>
                                  <input style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " type="text" name="senderEmail" placeholder="Email" required="">
                               </div>
             
                               <div class="inputAndLabelCon" id="rt">
                                  <label>Type de local<span class="necessary">*</span></label><br>
                                  <select name="ProOrPar" id="TypeLocal" style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " required="">
                                     <option value='' disabled selected hidden>Choisi le type de local</option>
                                     <?php
                                        $query =
                                           'SELECT distinct id,LibtypeLocal FROM typelocal';
                                        $results = mysqli_query($conn, $query);
                                        while ($rows = mysqli_fetch_assoc(@$results)) { ?>
                                     <option value="<?php echo $rows[
                                              'id'
                                              ]; ?>">
                                        <?php echo $rows['LibtypeLocal']; ?>
                                     </option>
                                     <?php }
                                        ?>
                                  </select>
                               </div>
             
                               <div class="inputAndLabelCon" id="Part">
                                  <label for="">Sujet <span class="necessary">*</span></label><br>
                                  <select name="messageSubject1" style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " id="pr">
                                     <option value='' disabled selected hidden>Choisi le Sujet</option>
                                     <?php
                                        $query =
                                           "SELECT distinct id,libelle FROM sujet where typ='Particulier'";
                                        $results = mysqli_query($conn, $query);
                                        while ($rows = mysqli_fetch_assoc(@$results)) { ?>
                                     <option value="<?php echo $rows[
                                              'id'
                                              ]; ?>">
                                        <?php echo $rows['libelle']; ?>
                                     </option>
                                     <?php }
                                        ?>
                                  </select>
                               </div>
             
                               <div class="inputAndLabelCon" id="Prof">
                                  <label for="">Sujet <span class="necessary">*</span></label><br>
                                  <select name="messageSubject2" style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " id="pf">
                                     <option value='' disabled selected hidden>Choisi le Sujet</option>
                                     <?php
                                        $query =
                                           "SELECT distinct id,libelle FROM sujet where typ='Professionnel'";
                                        $results = mysqli_query($conn, $query);
                                        while ($rows = mysqli_fetch_assoc(@$results)) { ?>
                                     <option value="<?php echo $rows[
                                              'id'
                                              ]; ?>">
                                        <?php echo $rows['libelle']; ?>
                                     </option>
                                     <?php }
                                        ?>
                                  </select>
                               </div>
             
                               <div class="inputAndLabelCon" id="atre">
                                  <label for="">Autre <span class="necessary">*</span></label><br>
                                  <input style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 40px; " type="text" name="messageSubject3" id="atr" placeholder="Autre">
                               </div>
             
             
                               <script>
                                  $(document).ready(function () { $("#Part").hide(); $("#Prof").hide(); $("#atre").hide(); });
                               </script>
             
                               <script>
                                  let sltplc = document.querySelector('#TypeLocal');
                                  sltplc.addEventListener('change', function () {
             
                                     if (this.value == '2') {
                                        $("#Prof").show();
                                        $("#atre").hide();
                                        $('#atr').val('');
                                        $("#Part").hide();
                                        $("#pr")[0].selectedIndex = 0;
             
                                        let slpf = document.querySelector("#pf");
                                        slpf.addEventListener('change', function () {
                                           if (this.value == 10) {
                                              $("#atre").show();
                                           }
                                           else {
                                              $("#atre").hide();
                                              $('#atr').val('');
                                           }
                                        });
                                     }
                                     else
                                        if (this.value == '1') {
                                           $("#Part").show();
                                           $("#atre").hide();
                                           $('#atr').val('');
                                           $("#Prof").hide();
                                           $("#pf")[0].selectedIndex = 0;
             
                                           let slpr = document.querySelector("#pr");
                                           slpr.addEventListener('change', function () {
                                              if (this.value == 5) {
                                                 $("#atre").show();
                                              }
                                              else {
                                                 $("#atre").hide();
                                                 $('#atr').val('');
                                              }
                                           });
                                        }
                                  });
                               </script>
             
                               <div class="inputAndLabelCon" id="messageTxt">
                                  <label for="">Message <span class="necessary">*</span></label><br>
                                  <textarea style=" border: 1px solid rgb(10, 10, 10) !important;
                       font-family: arial;
                       font-Weight: bold;
                       font-size: 18px;
                       color: #6c757d;  width: 100%;
                       height: 100px; " type="text" name="senderMessage" placeholder="Message" required=""></textarea><br><br>
             
                               </div>
             
             
                               <div class="inputAndLabelCon">
                <label id="captchaQuestion"></label><br>
                <input type="number" placeholder="Entrez bonne reponse " style=" border: 1px solid rgb(10, 10, 10) !important;
   font-family: arial;
   font-Weight: bold;
   font-size: 18px;
   color: #6c757d;  width: 100%;
   height: 40px; "  id="captchaAnswer"	required><br><br>
                <span id="errorMessage" class="error"></span>
            </div>
            
                               <button type="submit"  id="sendMessageBtn" style="color:#fff; width: 100% ; background-color:#000; font-weight:bold"
                                  name="sendEmailSubBtn">ENVOYER</button>
             
                               <?php
                                  if (isset($_POST['sendEmailSubBtn'])) {
                                     $eml = test_input($_POST['senderEmail']);
                                     $motex = 'http';
                                     $arobax = '@';
                                     if ($Subject1 != '' && $Subject1 != '5') {
                                        $query = "SELECT libelle FROM sujet where id='$Subject1'";
                                        $results = mysqli_query($conn, $query);
                                        while ($rows = mysqli_fetch_assoc(@$results)) {
                                           $vlSubject1 = $rows['libelle'];
                                        }
                                        $a = $vlSubject1;
                                     } elseif ($Subject1 == '5') {
                                        $a = $Subject3;
                                     }
             
                                     if ($Subject2 != '' && $Subject2 != '10') {
                                        $query = "SELECT libelle FROM sujet where id='$Subject2'";
                                        $results = mysqli_query($conn, $query);
                                        while ($rows = mysqli_fetch_assoc(@$results)) {
                                           $vlSubject2 = $rows['libelle'];
                                        }
                                        $a = $vlSubject2;
                                     } elseif ($Subject2 == '10') {
                                        $a = $Subject3;
                                     }
             
                                     if (
                                        !empty($_POST['senderName']) &&
                                        !empty($_POST['senderVille']) &&
                                        !empty($_POST['senderTel']) &&
                                        !empty($_POST['senderEmail']) &&
                                        !empty($_POST['ProOrPar']) &&
                                        !empty($_POST['senderMessage']) &&
                                        $a != '' &&
                                        filter_var($eml, FILTER_VALIDATE_EMAIL) &&
                                        preg_match('/^[0-9]{10}/', $Tel) &&
                                        strpos($Message, $motex) === false &&
                                        strpos($Message, $arobax) === false
                                     ) {
                                        $sqls = "INSERT INTO contact(nomprenom,ville,Tel,email,typlocal,sujet,messag) VALUES ('$Name','$Ville','$Tel','$Email','$typ','$a','$Message')";
                                        if (mysqli_query($conn, $sqls)) {
                                           $query = "SELECT libVille from ville where id='$Ville'";
                                           $results = mysqli_query($conn, $query);
                                           while ($rows = mysqli_fetch_assoc(@$results)) {
                                              $vlVille = $rows['libVille'];
                                           }
                                           $query = "SELECT LibtypeLocal FROM typelocal where id='$typ'";
                                           $results = mysqli_query($conn, $query);
                                           while ($rows = mysqli_fetch_assoc(@$results)) {
                                              $vltyp = $rows['LibtypeLocal'];
                                           }
                                           /***************send email**********************/
                                           $to = 'admin@nettoyage-casablanca-maroc.com';
                                           $subject = 'DEMANDE DE DEVIS NSS PLOMBERIE';
                                           $headers = 'From: NSS PLOMBERIE';
                                           $cntsendmail = "
                                                       Name          : $Name
                                                       Ville         : $vlVille
                                                       Tel           : $Tel
                                                       Email         : $Email
                                                       type de local : $vltyp
                                                       Sujet         : $a
                                                       Message       : $Message
                                                   ";
                                           mail($to, $subject, $cntsendmail, $headers);
                                           /***************send email*********************/
                                           echo '<script>swal("Message envoyé avec succès!", "votre message a été bien envoyer, notre service concerné prendra en contact selon votre disponibilité!", "success");</script>';
                                        } else {
                                           echo '<script>swal("Message envoyé échoue!", "Votre message non envoyer, veillez remplir tout les champs!", "error");</script>';
                                        }
                                        mysqli_close($conn);
                                     } else {
                                        echo '<script>swal("Message envoyé échoue!", "Votre message non envoyerveillez remplir tout les champs!", "error");</script>';
                                     }
                                  }
                                  function test_input($data)
                                  {
                                     $data = trim($data);
                                     $data = stripslashes($data);
                                     $data = htmlspecialchars($data);
                                     return $data;
                                  }
                                  ?>
             
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DEMANDEZ UN DEVIS GRATUIT End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>35 Bd Zerktouni , 5ème étage N°8 Casablanca – Maroc</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(+212) 06 39 37 27 90</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>nss.plomberie.maroc@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Horaires d'ouvertures</h4>
                    <h6 class="text-light">Lundi vendredi:</h6>
                    <p class="mb-4">09.00 AM - 09.00 PM</p>
                    <h6 class="text-light">Samedi Dimanche:</h6>
                    <p class="mb-0">09.00 AM - 12.00 PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <a class="btn btn-link" href="societe-assainissement-casablanca.html">Assainissement</a>
                    <a class="btn btn-link" href="societe-debouchage-evier-lavabo-casablanca.html">Débouchage Evier et lavabo</a>
                    <a class="btn btn-link" href="societe-debouchage-wc-casablanca.html">Débouchage WC</a>
                    <a class="btn btn-link" href="societe-installation-plombierie-casablanca.html">Dépannage Plomberie</a>
                    <a class="btn btn-link" href="societe-desembouage-casablanca.html">Désembouage</a>
                    <a class="btn btn-link" href="societe-installation-eau-chaud-casablanca.html">Installation chaudière</a>
                    <a class="btn btn-link" href="societe-installation-chaufage-casablanca.html">Installation de Chauffage</a>
                    <a class="btn btn-link" href="societe-installation-robinet-casablanca.html">Installation de robinets</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Bulletin</h4>
                    <p>Depannage et Maintenae plomberie Casablanca</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <a>Copyright</a>&copy; <a class="border-bottom" href="#">NSS PLOMBERIE</a> 2015.
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<script>
        // Fonction pour générer un CAPTCHA
        function generateCaptcha() {
            const num1 = Math.floor(Math.random() * 10);
            const num2 = Math.floor(Math.random() * 10);
            return { question: `Quel est la somme de ${num1} + ${num2} ?`, answer: num1 + num2 };
        }

        // Génération initiale du CAPTCHA
        let captcha = generateCaptcha();
        document.getElementById('captchaQuestion').innerText = captcha.question;

        // Gestion de l'événement de soumission
        document.getElementById('devisForm').addEventListener('submit', function(event) {
            const userAnswer = parseInt(document.getElementById('captchaAnswer').value);
            const errorMessage = document.getElementById('errorMessage');

            if (userAnswer === captcha.answer) {
                // Si la réponse est correcte, laisser le formulaire s'envoyer
                errorMessage.innerText = ''; // Supprime le message d'erreur
            } else {
                // Si la réponse est incorrecte, empêcher l'envoi et afficher un message
                event.preventDefault(); // Bloque l'envoi du formulaire
                errorMessage.innerText = 'Le nombre est incorrect. Veuillez réessayer.';
                // Générer un nouveau CAPTCHA
                captcha = generateCaptcha();
                document.getElementById('captchaQuestion').innerText = captcha.question;
                document.getElementById('captchaAnswer').value = ''; // Réinitialiser le champ de réponse
            }
        });
    </script>  
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

</body>

</html>