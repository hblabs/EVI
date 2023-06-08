
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
                
                <div class="card">
                <h5 class="card-header">TOUS LES MAILS DU NEWSLETTER</h5>
                <div class="table-responsive text-nowrap">

                  <table class="table table-sm" id="articles">
                  <thead>
                      <tr>
                        <th>mail</th>
                        
                     </tr>
                    </thead>
                  <?php
                  $search="SELECT * FROM newsletter";
                  $result=mysqli_query($conn, $search);
                  while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $mail=$row['mail'];
                       ?>
                   
                    <tbody class="table-border-bottom-0">
                      <tr>
                      
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $mail ?></strong></td>
                        
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
    <script>
      $document.ready(function(){
        $('#articles').DataTable();
      });
    </script>
  </body>
</html>
