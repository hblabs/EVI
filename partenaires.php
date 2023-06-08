<?php
require 'db/db.php';


?>


<!DOCTYPE html>
<html>
  <head>
    <title>CODHAS Admin</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.png" />
  <?php include 'headers.php';?>
</head>
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       <?php include'menu.php';?>
        <!-- / Menu -->

        <!-- Layout container -->
      
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-8 order-0">
                    <div class="col-sm-10" style="padding: 10px;">
                        <a  href="new_partenaire" class="btn btn-primary">Nouveau partenaire</a>
                      </div>
                <div class="card">
                <h5 class="card-header">TOUTES LES PARTENAIRES</h5>
                <div class="table-responsive text-nowrap">

                  <table class="table table-sm">
                  <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Logo</th>
                        <th>Description</th>
                        <th>Actions</th>
                        
                     </tr>
                    </thead>
                  <?php
                  $search="SELECT * FROM partenaires ORDER BY id DESC";
                  $result=mysqli_query($conn, $search);
                  $count=mysqli_num_rows($result);
                        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $id=$row['id'];
                            $title=$row['nom'];
                            $content=$row['description'];
                            $file=$row['logo'];
                            
   $folder="../img/partenaires";
   $download=$folder.'/'.$file;
  
                       
                       ?>
                   
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $title ?></strong></td>
                       
                        <td>
                          <img src="<?php echo $download ?>" alt="Logo" class="rounded-circle" style="width:50px; height: 50px ; object-fit: cover;" />
                            
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $content ?></strong></td>
                       
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="edit_partenaire?id=<?php echo $id ?>"
                                ><i class="bx bx-edit-alt me-1"></i> Modifier</a
                              >
                              <a class="dropdown-item" href="actions/delete_partenaire?id=<?php echo $id ?>">
                                <i class="bx bx-trash me-1"></i> Supprimer</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                     
                    </tbody>
                    <?php
                        ;
                    }
                ?>
                  </table>
                  
                    
                </div>
              </div>
                
              </div>
              
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
         <?php include 'footer.php';?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

   
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
