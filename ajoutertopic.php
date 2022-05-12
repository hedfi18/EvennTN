
<?php
include 'D:\xampp\htdocs\web1\test\Controller\topicC.php';
require_once 'D:\xampp\htdocs\web1\test\Model\topic.php';
   
if (isset($_POST['titre'] ) && isset($_POST['description'] ) && isset($_POST['contenu'] )) 
{
        $Topic = new topic( $_POST['titre'] ,$_POST['description'] ,$_POST['contenu']);
        $TopicC = new topicC();
        $TopicC->ajoutertopic($Topic);
        header('Location:tab-blog.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/7cd498be8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      
    <title>SB Admin 2 - Tables</title>

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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                    
            <img class="w-50" src="img/rounded.png" alt="Image">
                
            </a>
        </ul>  
        <div  >
        <div  > 
       <br><br><br>
    <form action="" method="POST" id ="myform">
                                        <table border="1" align="center">
                                           
                                            <tr>
                                                <td>
                                                    <label for="titre">titre:
                                                    </label>
                                                </td>
                                                <td><input type="text" name="titre" id="titre" maxlength="50"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="description">description:
                                                    </label>
                                                </td>
                                                <td><input type="text" name="description" id="description" ></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="contenu">contenu :
                                                    </label>
                                                </td>
                                                <td><input type="text" name="contenu" id="contenu" maxlength="1000"></td>
                                            </tr>   
                                            <tr>
                                                <td>
                                                    <input type="submit" value="Envoyer"> 
                                                </td>
                                                <td>
                                                    <input type="reset" value="Annuler" >
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <p style="color: red;" id="erreur"></p>  
                                    <script src="assets/js/Forum.js"></script>
                                    </div>
     </div></div>
                                </body>

   
   
    </body>
    
    </HTML>
    <HTML>
    <head>
    </head>

    <body>
    
   
</HTML>