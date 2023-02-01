
<?php


class Cast
{
	// déclaration table intermediaire
	private Role $_role;
	private Acteur $_acteur;
	private Film $_film;


	public function __construct($role, $acteur, $film)
	{
		$this->_role = $role;
		$this->_acteur = $acteur;
		$this->_film = $film;
		//ajouter le cast a film et acteur et role
		$this->_film->ajoutCasting($this);
		$this->_acteur->ajoutCasting($this);
		$this->_role->ajoutCasting($this);
	}

	/**
	 * Get the value of _role
	 */
	public function getRole(): Role
	{
		return $this->_role;
	}

	/**
	 * Set the value of _role
	 */
	public function setRole(string $_role)
	{
		$this->_role = $_role;
		return $this;
	}

	/**
	 * Get the value of _acteur
	 */
	public function getActeur(): Acteur
	{
		return $this->_acteur;
	}

	/**
	 * Set the value of _acteur
	 */
	public function setActeur(Acteur $_acteur)
	{
		$this->_acteur = $_acteur;
	}

	/**
	 * Get the value of _film
	 */
	public function getFilm(): Film
	{
		return $this->_film;
	}

	/**
	 * Set the value of _film
	 */
	public function setFilm(Film $_film)
	{
		$this->_film = $_film;
	}
}
