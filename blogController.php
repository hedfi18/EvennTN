<?php
	//require '../config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\web1\test\View\Backend\config.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'\web1\test\View\Backend\blog1.php';
	//include_once '../Model/utilisateur.php';
	class blogC {
		function afficherblog(){
			$sql="SELECT * FROM topic";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage("no cnx"));
			}
		}

        function supprimerblog($id){
			$sql="DELETE FROM topic WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
    
    
        function ajouterblog($blog){
			$sql='INSERT INTO topic (titre,descrip,contenu) 
			VALUES (:titre,:descc,:contenu)';
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'titre' => $blog->gettitre(),
					'descrip' => $blog->getdescrip(),
                    'contenu' => $blog->getcontenu()
                    
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
        function modifierblog($blog, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE topic SET 
						titre= :titre, 
						descrip= :descrip,
                        contenu= :contenu
                       
					WHERE id= :id'
				);
				$query->execute([
					'titre' => $blog->gettitre(),
					'descrip' => $blog->getdescrip(),
                    'contenu' => $blog->getcontenu(),
                  
                    
                    
					'id' => $id
				]);	
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererblog($id){
			$sql="SELECT * from topic where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
	
				$blog=$query->fetch();
				return $blog;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

	}
   
    


        ?>