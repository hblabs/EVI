
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Formulaires/</span> Ajouter les Recettes</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Ajouter une recette (Entree de Fonds)</h5>
                      <small class="text-muted float-end">Veuillez completez tous les champs ! </small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="actions/recettes" enctype="multipart/form-data">
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Nature de la recette</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              required="required"
                              class="form-control"
                              name="nature"
                              id="basic-default-company"
                              value="Recette"
                              readonly=""
                            />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Origine de la Recette</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              required="required"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Origine"
                              name="origine"
                            />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Montant de la Recette</label>
                          <div class="col-sm-8">
                            <input
                              type="text"
                              required="required"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="100.00"
                              name="amount"
                            />
                          </div>
                          <div class="col-sm-2">
                            <input
                              type="text"
                              readonly=""
                              class="form-control"
                              id="basic-default-company"
                              placeholder="$"
                              name=""
                            />
                          </div>
                          
                        </div>


                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Informations sur la Recette</label>
                          <div class="col-sm-5">
                            <input
                              type="text"
                              required="required"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Motif"
                              name="motif"
                            />
                          </div>
                          <div class="col-sm-5">
                            <input
                              type="text" 
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Description"
                              name="description"
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
                  </div>
                </div>
                <!-- Basic with Icons -->
               
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
           
            <!-- / Footer -->

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
    <script>
      let btn=document.getElementById("inputGroupFile04");
      let choosenimg =document.getElementById("choosen-img");
      let filename=document.getElementById("img-name");
      btn.onchange=()=>{
        let reader = new FileReader();
        reader.readAsDataURL(btn.files[0]);
        console.log(btn.files[0]);
        reader.onload=()=>{
          choosenimg.setAttribute("src", reader.result)
        }
      }

    </script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  
  </body>
</html>
