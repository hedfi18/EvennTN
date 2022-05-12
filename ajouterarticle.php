<?php
include 'D:\xampp\htdocs\web1\test\View\Backend\blogController.php';
require_once 'D:\xampp\htdocs\web1\test\View\Backend\blog1.php';
    $error = "";

    // create adherent
    $blog = null;

    // create an instance of the controller
    $blogC = new blogC();
    if (
        isset($_POST["titre"]) &&
		isset($_POST["descrip"]) &&		
        isset($_POST["contenu"]) &&
		
        isset($_POST["id"]) 
    ) {
        if (
            !empty($_POST["titre"]) && 
			!empty($_POST['descrip']) &&
            !empty($_POST["contenu"]) && 
			
            !empty($_POST["id"]) 
        ) {
            $blog = new blog(
                $_POST['titre'],
				$_POST['descrip'],
                $_POST['contenu'], 
				
                $_POST['id']
            );
            $blogC->ajouterblog($blog);
            header('Location:tables.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeAdherents.php">Retour à la liste des adherents</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="titre">titre:
                        </label>
                    </td>
                    <td><input type="text" name="titre" id="titre" maxlength="255"></td>
                </tr>
				<tr>
                    <td>
                        <label for="descrip">descrip:
                        </label>
                    </td>
                    <td><input type="text" name="descrip" id="descrip" maxlength="3000"></td>
                </tr>
                <tr>
                    <td>
                        <label for="contenu">contenu":
                        </label>
                    </td>
                    <td><input type="text" name="contenu" id="contenu" maxlength="3000"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="id" id="id">
                    </td>
                </tr>
                
                              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>