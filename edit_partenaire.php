
<?php
require '../db/db.php';
$id=$_GET['id'];
$search="SELECT * FROM partenaires WHERE id='$id'";
$result=mysqli_query($conn, $search);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count=mysqli_num_rows($result);


if ($count<>0) {
    $title=$row['nom'];
    $content=$row['description'];
    $img_loc=$row['logo'];
    $img_lacation="../img/articles/";
    $img=$img_lacation.''.$img_loc;

}

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Formulaires/</span> Modifier le Partenaire</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Modifications des donnees du Partenaire</h5>
                      <small class="text-muted float-end">Veuillez completez tous les champs ! </small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="" enctype="multipart/form-data">
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Changer le titre de l'Article</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              name="title_article"
                              id="basic-default-company"
                              placeholder="Nom du Partenaire"
                              required="required"
                              value="<?php echo $title ?>"
                            />
                            <input style="visibility:hidden"
                              type="text"
                              class="form-control"
                              name="txt_id"
                              id="basic-default-company"
                              placeholder="Titre"
                              value="<?php echo $id ?>"
                            />
                          </div>
                        </div>
                       

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Modifier Logo du Partenaire</label>
                          <div class="col-sm-10">
                          <div class="input-group">
                            <input
                              type="file"
                              required="required"
                              class="form-control"
                              id="inputGroupFile04"
                              name="file"
                              accept="image/*"
                              aria-describedby="inputGroupFileAddon04"
                              aria-label="Upload"
                            />
                            <figcaption id="img-name">
                              <img src="<?php echo $img ?>" id="choosen-img" style="width: 100px; height: 100px; object-fit: cover;">
                             </figcaption>
                          </div>
                          </div>
                        </div>

                       

                        
                       
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Modifier la description</label>
                          <div class="col-sm-10">
                            <textarea
                              id="basic-default-message"
                              class="form-control"
                              name="article_content"
                              placeholder="Contenu de l'article"
                              aria-label="Contenu de l'article"
                              aria-describedby="basic-icon-default-message2"
                             
                            ><?php echo $content ?></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <input type="submit" class="btn btn-primary" name="submit" value="Modifier">
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
