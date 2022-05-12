<?php
include 'D:\xampp\htdocs\web1\test\View\Backend\blogController.php';
require_once 'D:\xampp\htdocs\web1\test\View\Backend\blog.php';
$id = $_GET['id'];
$blogC=new blogC();
$blog = $blogC->recupererblog($id);

$nom = $blog['titre'];
$descc = $blog['descrip'];
$body = $blog['contenu'];




if(
    isset($_POST["titre"])&&
    isset($_POST["descrip"])&&
    
    isset($_POST["contenu"])
) {
  
  //echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
        $blog = new blog(
                    $_POST['titre'],
                    $_POST['descrip'], 
                    $_POST['contenu']
        );
        $blogC->modifierblog($blog,$id);
        header('Location:tab-blog.php');
    }
    else
        echo '';   
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Modifier utilisateur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <script src="https://kit.fontawesome.com/7cd498be8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="produitController.js"></script>

    <title>EvenTN</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                <center><img class="w-50" src="img/rounded.png" alt="Image"></span></center>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4" style="color: red;">Modifier le blog <?php echo $titre;  ?> avec l'id<center><h4 style="color: red;"> <?php echo $id; ?></h4</center></h5>
                    
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="">
                    <div class="col-12">
                      <label for="yourName" class="form-label">titre</label>
                      <input type="text" name="titre" class="form-control" id="titre" value="<?php echo $titre; ?>">
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">descrip</label>
                      <input type="text" name="descrip" class="form-control" id="descrip" value="<?php echo $descrip; ?>">
                    </div>
                    <div class="col-12">
                      <label for="yourName" class="form-label">contenu</label>
                      <input type="text" name="contenus" class="form-control" id="contenu" value="<?php echo $contenu; ?>">
                    </div>
                    
                    <a id="err" style="color:red">
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" >Modifier</button>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>