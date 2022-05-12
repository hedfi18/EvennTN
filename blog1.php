<?php
	class blog{
		
		
		private $id=null;
        private $titre=null;
        private $descrip=null;
        private $contenu=null;
		
		
		
		function __construct($titre,$descrip,$contenu/*,$id*/){
			
			
			$this->titre=$titre;
            $this->descrip=$descrip;
            
			$this->contenu=$contenu;
            //$this->id=$id;
		}
		/*function getId(){
			return $this->idu;
		}*/
		function getid(){
			return $this->id;
		}
		function gettitre(){
			return $this->titre;
		}
        function getdescrip(){
			return $descrip->descrip;
		}
       
		function getcontenu(){
			return $this->contenu;
		}
		
        //////////


		
		function settitre(string $titre){
			$this->titre=$titre;
		}
        function setdescrip(string $descrip){
			$this->descrip=$descrip;
		}
        
		function setcontenu(string $contenu){
			$this->contenu=$contenu;
		}
	}


?>