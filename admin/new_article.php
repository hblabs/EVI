
<!DOCTYPE html>
<html>
  <head>
    <title>CODHAS Admin</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.png" />
    <script src="https://cdn.tiny.cloud/1/c0qd1paicznj4xohimsei8tw54rnagh2uwxgwo7te26ueuy9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Formulaires/</span> Nouvel Article</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Ajouter un Article</h5>
                      <small class="text-muted float-end">Veuillez completez tous les champs ! </small>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="actions/new_article.php" enctype="multipart/form-data">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Categorie de l'Article</label>
                          <div class="col-sm-10">
                            
                            <select class="form-select" id="inputGroupSelect01" name="cat">
                            
                            <?php

$search="SELECT category FROM categories";
$result=mysqli_query($conn, $search);
$count=mysqli_num_rows($result);
      while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $cat=$row['category'];?>
          <option value="<?php echo $cat?> "><?php echo $cat?> </option>
                          <?php };
                          ?> 
                            
                            
                            </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Titre de l'Article</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              required="required"
                              class="form-control"
                              name="title_article"
                              id="basic-default-company"
                              placeholder="Titre"
                            />
                          </div>
                        </div>
                        <div class="row mb-3" style="display:none">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Auteur  de l'Article</label>
                          <div class="col-sm-10">
                            <input
                              type="text"
                              class="form-control"
                              id="basic-default-company"
                              placeholder="Auteur"
                              name="txt_author"
                            />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Image de l'Article</label>
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
                              <img id="choosen-img" style="width: 100px; height: 100px; object-fit: cover;">
                             </figcaption>
                          </div>
                          </div>
                        </div>

                       

                        
                       
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Contenu de l'Article</label>
                          <div class="col-sm-10">
                            <textarea
                            type="text"
                            required="required"
                            class="form-control"
                            name="article_content"
                            placeholder="Contenu de l'article"
                            aria-label="Contenu de l'article"
                            aria-describedby="basic-icon-default-message2"
                            id="compose-textarea" style="height: 300px"
                          >
                         </textarea>

                        </div>
                            
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
<script src="assets/summernote/summernote-bs5.min.js"></script>
    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      });
    </script>
  </body>
</html>
