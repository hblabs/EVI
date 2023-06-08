<?php
include 'db/db.php';
session_start();
$admin=$_SESSION['admin'];
if(!isset($_SESSION['admin'])){
    header("location: login.php");
    
    
}


$search="SELECT * FROM admin WHERE username='$admin'";
$result=mysqli_query($conn, $search);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count <> 0){
  $name=$row['name'];
  $folder="assets/img/admin/";
  $img=$row['img'];
  $imgv=$folder.''.$img;
}
   
?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

  

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>


<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.php" class="app-brand-link">
        <span class="app-brand-logo demo">
         <img src="assets/img/favicon/favicon.png" style="width: 150px;">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="index.php" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Tableau de Bord</div>
        </a>
      </li>

      <!-- Layouts -->
     

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Articles</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="all_articles.php" class="menu-link">
              <div data-i18n="Account">Tous les Articles</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="new_article.php" class="menu-link">
              <div data-i18n="Account">Ajouter un Article</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="categories.php" class="menu-link">
              <div data-i18n="Account">Categorie des Articles</div>
            </a>
          </li>
        </ul>

        <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Comptabilité</div>
        </a>
        <ul class="menu-sub">
      </li>
      
      <li class="menu-item">
        <a href="comptabilite" class="menu-link">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Tables">Generalités</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="comptabilite_in" class="menu-link">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Tables">Entrees</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="comptabilite_out" class="menu-link">
            <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Tables">Sorties</div>
        </a>
      </li>
</li>
</ul>


      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Offres</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="offers.php" class="menu-link">
              <div data-i18n="Account">Toutes les Offres</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="new_offer.php" class="menu-link">
              <div data-i18n="Account">Ajouter une Offre</div>
            </a>
          </li>  
        </ul>
      </li>


      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Partenaires</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="partenaires" class="menu-link">
              <div data-i18n="Account">Tous les Partenaires</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="new_partenaire" class="menu-link">
              <div data-i18n="Account">Ajouter un Partenaire</div>
            </a>
          </li>
        </ul>
      </li>


      <li class="menu-item">
            <a href="newsletter" class="menu-link">
              <div data-i18n="Account">Newletter</div>
            </a>
          </li>
      

     
      
    </ul>
  </aside>
  <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <b>Environnementalu - Panneau d'Administration</b>
                  
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
               <b>  <?php echo $name ;?></b>
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?php echo $imgv ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?php echo $imgv ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $admin ?></span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Paramètres</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="actions/logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Se Déconnecter</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>