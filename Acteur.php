


<?php

class Acteur extends Personne
{
	private array $_listCasting; //filtrer avec role 

	public function __construct($nom, $prenom, $sex, $dateNaissance)
	{
		parent::__construct($nom, $prenom, $sex, $dateNaissance);
	}

	/**
	 * Get the value of _listCasting
	 */
	public function getListCasting(): array
	{
		return $this->_listCasting;
	}

	/**
	 * Set the value of _listCasting
	 */
	public function setListCasting(array $_listCasting)
	{
		$this->_listCasting = $_listCasting;
	}

	public function ajoutCasting(Cast $cast)
	{
		//ajouter un element a la list des livres
		$this->_listCasting[] = $cast;
		return $this;
	}


	public function __toString()
	{
		$ecrire = $this->getNom() . " " . $this->getPrenom();
		echo "<br>";
		return $ecrire;
	}

	

	
	public function getListFilmParActeur()	{
		//filtrer la list par le role 
		//return $this->_listCasting . filter_id($role->_role);
		
		echo "<div >";
		echo "<h2> Les Films qui ont l'acteur " .  $this->getNom() ." ". $this->getPrenom() . " Sont:  </h2>";
		//$listdesfilms = array();
		$listdesfilms = [];
		
		
		//echo count($this->getListCasting() );

		foreach ($this->getListCasting() as $val) {

			
			//!ajout a lafffichage si la film il est pas encore deja afficher
			//echo "test initial ". count($listdesfilms) ;
			if (count($listdesfilms) !=0){
				//echo "2eme etap count ". count($listdesfilms) ;
				foreach($listdesfilms as $valexistant){
					//echo("existatn" .$valexistant . "<br>") ;	
					 if (strcmp($val->getFilm()->getTitre(),$valexistant)!=0){
						 echo "<div>" . $val->getFilm()->getTitre() . " </div>";
						 $listdesfilms[] = $val->getFilm()->getTitre();
						 //echo "2eme etap" .count($listdesfilms) ;
					}					
				}
			}
			else{
				echo "<div>" . $val->getFilm()->getTitre() . " </div>";
				$listdesfilms[] = $val->getFilm()->getTitre();
				//echo"1er etap count" .count($listdesfilms) ;
				//echo($listdesfilms[0]);


			}
			
																					
			

		echo "</div>";
		
		}
	}
}
