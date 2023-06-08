
<?php
require '../db/db.php';
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
                    <div class="col-sm-12">
                       
                        <div class="card-body" style="background:white;border-radius:10px;">
                      <form method="POST" action="actions/new_cat.php" enctype="multipart/form-data">
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Categorie de l'Article</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              required="required"
                              class="form-control"
                              name="category"
                              id="basic-default-company"
                              placeholder="Categorie"
                            />
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <input type="submit" class="btn btn-primary" name="submit" value="Enregistrer">
                          </div>
                        </div>
                      </form>
                    </div>
                    <p>

                      </div>
                <div class="card">
                <h5 class="card-header">TOUTES LES CATGEORIES</h5>
                <div class="table-responsive text-nowrap">

                  <table class="table table-sm" id="articles">
                  <thead>
                      <tr>
                      <th></th>
                        <th>Title</th>
                        <th>ACTIONS</th>
                     </tr>
                    </thead>
                  <?php
                  $search="SELECT * FROM categories";
                  $result=mysqli_query($conn, $search);
                  $count=mysqli_num_rows($result);
                        while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            $id=$row['id'];
                            $cat=$row['category'];
                            
                       
                       ?>
                   
                    <tbody class="table-border-bottom-0">
                      <tr>
                      <td><input type="checkbox"></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $cat ?></strong></td>
                        <td>
                        <a class="dropdown-item" href="actions/delete_cat.php?id=<?php echo $id ?>">
                                <i class="bx bx-trash me-1"></i> Supprimer</a
                              >
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
    <script>
      $document.ready(function(){
        $('#articles').DataTable();
      });
    </script>
  </body>
</html>
