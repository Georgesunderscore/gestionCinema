


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
}
