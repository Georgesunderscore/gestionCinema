


<?php


class Genre
{
	// déclaration
	// nom, le prénom, le sexe et la date de naissance 
	private string $_genre;
    private array $_listFilm;
			
	public function __construct($genre)
	{
		$this->_genre = $genre;
	}


    

	/**
	 * Get the value of _genre
	 */ 
	public function getGenre()
	{
		return $this->_genre;
	}

	/**
	 * Set the value of _genre
	 *
	 * @return  self
	 */ 
	public function setGenre($_genre)
	{
		$this->_genre = $_genre;

	    return $this;
	}

    public function __toString()
	{
		$ecrire = $this->getGenre();
		echo "<br>";
		return $ecrire;
	}

    

    public function ajoutFilm(Film $film)
        {
            //ajouter un element a la list des livres
            $this->_listFilm [] = $film;
            return $this;
        }

        



    /**
     * Get the value of _listFilm
     */ 
    public function getListFilm()
    {
        return $this->_listFilm;
    }

    /**
     * Set the value of _listFilm
     *

     */ 
    public function setListFilm($_listFilm)
    {
        $this->_listFilm = $_listFilm;

        
    }

    //getListFilmParGenre
    //Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Bladn getListFilmParGenre()ist par le genre
	public function getListFilmParGenre()
	{
		//	echo "<h2> Les Films de ce genre " .  $this . "</h2>";
		echo "<div >";
		echo "<h2> Les Films qui appartient au genre " .  $this->getGenre() . " Sont:  </h2>";
		foreach ($this->getListFilm() as $val) {

			//faire l'echo html 
			echo "<span>" . $val->getTitre() . " </span>";
		}
		echo "</div>";
		
	}





}

