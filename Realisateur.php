
<?php
class Realisateur extends Personne
{

	private array $_listFilm;
	
	public function __construct($nom, $prenom, $sex, $dateNaissance)
	{
		parent::__construct($nom, $prenom, $sex, $dateNaissance);
	}
	/**
	 * Get the value of _listFilm
	 *
	 * 
	 */
	public function getListFilm(): array
	{
		return $this->_listFilm;
	}
	/**
	 * Set the value of _listFilm
	 *
	 */
	public function setListFilm(array $_listFilm)
	{
		$this->_listFilm = $_listFilm;
	}

	
    public function ajoutFilm(Film $film)
        {
            //ajouter un element a la list des livres
            $this->_listFilm [] = $film;
            return $this;
        }		


	//getListFilmParGenre
	//Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Bladn getListFilmParGenre()ist par le genre
	public function getListFilmParRealisateur()
	{
		//	echo "<h2> Les Films de ce genre " .  $this . "</h2>";
		echo "<div >";
		echo "<h2> Les Films qui appartient a la Realisateur " .  $this->getNom() ." ".$this->getPrenom(). " Sont:  </h2>";
		foreach ($this->getListFilm() as $val) {
			//faire l'echo html 
			echo "<span>" . $val->getTitre() . " </span>";
		}
		echo "</div>";
		
	}

	

	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	
	
	}
