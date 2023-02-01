


<?php


class Personne
{
	// déclaration
	// nom, le prénom, le sexe et la date de naissance 
	private string $_nom;
	private string $_prenom; ///france
	private String $_sex;
	private string $_dateNaissance;

	public function __construct($nom, $prenom, $sex, $dateNaissance)
	{
		$this->_nom = $nom;
		$this->_prenom = $prenom;
		$this->_sex = $sex;
		$this->_dateNaissance = $dateNaissance;
	}



	/**
	 * Get the value of _nom
	 */
	public function getNom(): string
	{
		return $this->_nom;
	}

	/**
	 * Set the value of _nom
	 */
	public function setNom(string $_nom)
	{
		$this->_nom = $_nom;
	}

	/**
	 * Get the value of _prenom
	 */
	public function getPrenom(): string
	{
		return $this->_prenom;
	}

	/**
	 * Set the value of _prenom
	 */
	public function setPrenom(string $_prenom)
	{
		$this->_prenom = $_prenom;
	}

	/**
	 * Get the value of _sex
	 */
	public function getSex(): int
	{
		return $this->_sex;
	}

	/**
	 * Set the value of _sex
	 */
	public function setSex(int $_sex)
	{
		$this->_sex = $_sex;
	}

	/**
	 * Get the value of _dateNaissance
	 */
	public function getDateNaissance(): string
	{
		return $this->_dateNaissance;
	}

	/**
	 * Set the value of _dateNaissance
	 */
	public function setDateNaissance(string $_dateNaissance)
	{
		$this->_dateNaissance = $_dateNaissance;
	}
}
