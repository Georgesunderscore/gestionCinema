//réalisateur r (unique, avec nom, prénom, sexe et date de naissance).

<?php
class Realisateur extends Personne
{
	public function __construct($nom, $prenom, $sex, $dateNaissance)
	{
		parent::__construct($nom, $prenom, $sex, $dateNaissance);
	}
}
